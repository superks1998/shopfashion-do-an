<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Auth;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class ProductController
 *
 * @package App\Http\Controllers\Shop
 */
class ProductController extends Controller
{
    public function productDetail(int $id)
    {
        $product = Product::with(['images'])->findOrFail($id);

        return view('shop.page.product-detail', compact('product'));
    }

    public function addCart(Request $request, $id): JsonResponse
    {
        $product = Product::query()->findOrFail($id);

        $quantity = $request->input('quantity');
        $data['id'] = $id;
        $data['qty'] = $quantity;
        $data['name'] = $product->name;
        $data['price'] = number_price($product->price, $product->sale);
        $data['weight'] = '1';
        $data['options'] = [
            'image' =>  $product->feature_image_before,
            'sale' => $product->sale,
            'size' => $request->input('size')
        ];
        Cart::add($data);
        $qtyCart = Cart::count();
        $contents = Cart::content();
        $view = view('components.shop.cart-detail', compact('contents'))->render();

        return response()->json([
            'code'    => 200,
            'message' => 'success',
            'count' => $qtyCart,
            'data' => Cart::content(),
            'view' => $view
        ]);
    }

    public function show()
    {
        $contents = Cart::content();

        return view('components.shop.cart-detail', compact('contents'));
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        Cart::remove($id);
        $contents = Cart::content();

        return view('components.shop.cart-detail', compact('contents'));

    }

    public function updateQty(Request $request)
    {
        $qty = $request->input('quantity');
        $id = $request->input('id');
        Cart::update($id, $qty);
        $contents = Cart::content();

        return view('components.shop.cart-detail', compact('contents'));
    }

    public function autoCompleteSearch(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = [];
        if (!empty($keyword)) {
            $products = Product::query()
                ->where('name', 'LIKE', "%{$keyword}%")
                ->get();
        }

        return view('shop.components.result_search', compact('products'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Product::query()
                ->where('name', 'LIKE', "%{$keyword}%")
                ->paginate(20);

        if (!empty($keyword) && !$products->isEmpty()) {
            return view('shop.page.search', compact('products', 'keyword'));
        }

        return view('errors.search_error', compact('keyword'));
    }

    public function checkout()
    {
        $contents = Cart::content();

        $transaction = get_data_user('customer', 'transaction');

        return view('shop.page.checkout', compact('contents', 'transaction'));
    }

    public function checkoutSuccess($id)
    {
        $contents = Cart::content();
        $transaction = Transaction::query()->findOrFail($id);

        return view('shop.page.checkout_success', compact('contents', 'transaction'));
    }

    public function save(Request $request)
    {
        try {
            DB::beginTransaction();
            $transaction = $this->saveCheckout($request);
            $contents = Cart::content();

            foreach ($contents as $value) {
                Order::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $value->id,
                    'sale' => $value->options->sale,
                    'qty' => $value->qty,
                    'price' => $value->price,
                ]);
                DB::table('products')->where('id', $value->id)->increment('pay');
            }

            Cart::destroy();
            DB::commit();

            return redirect()->route('checkout.success', ['id' => $transaction->id]);
        } catch (\Exception $exception) {
            DB::rollBack();

            return redirect()->back()->with('err','Bạn chưa nhấn cho phép');
        }
    }

    public function saveCheckout($request, int $id = null)
    {
        return Transaction::query()->updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'email' => $request->email,
                'customer_id' => Auth::guard('customer')->id(),
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'notes' => $request->notes ?? '',
                'type' => $request->type,
                'total_money' => str_replace(',', '', Cart::subtotal())
            ]
        );
    }
}
