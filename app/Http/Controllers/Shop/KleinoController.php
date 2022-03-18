<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KleinoController extends Controller
{
    public function index()
    {
        $sliders = Slider::all()->toArray();
        $products = Product::query()->where('active', 1)->where('hot', 1)->latest()->take(10)->get();

        return view('shop.page.index', compact('sliders', 'products'));
    }

    public function account()
    {
        $user = Auth::guard('customer')->user();
        $transactions = Transaction::query()->where('customer_id', $user->id)->latest()->get();

        return view('shop.page.account', compact('user', 'transactions'));
    }

    public function aboutUs()
    {
        return view('shop.page.about_us');
    }

    public function policyPrivacy()
    {
        return view('shop.page.policy_privacy');
    }

    public function policyReturn()
    {
        return view('shop.page.policy_return');
    }

    public function termsService()
    {
        return view('shop.page.terms_service');
    }

    public function getAllProduct(Request $request)
    {
        $sort = $request->get('sort_by');
        $products = new Product();

        if (!$sort) {
            $products = $products->latest()->paginate(10);
        }

        if ($sort === 'created-descending') {
            $products = $products->orderBy('created_at', 'desc')->paginate(10);
        }

        if ($sort === 'created-ascending') {
            $products = $products->orderBy('created_at')->paginate(10);
        }


        if ($sort === 'price-ascending') {
            $products = $products->orderBy('price')->paginate(10);
        }

        if ($sort === 'price-descending') {
            $products = $products->orderBy('price', 'desc')->paginate(10);
        }

        if ($sort === 'title-ascending') {
            $products = $products->orderBy('name')->paginate(10);
        }

        if ($sort === 'title-descending') {
            $products = $products->orderBy('name', 'desc')->paginate(10);
        }

        return view('shop.page.products', compact('products'));
    }

    public function getAllSaleProduct(Request $request)
    {
        $sort = $request->get('sort_by');
        $products = new Product();
        $products = $products->where('sale', '!=', '0');

        if (!$sort) {
            $products = $products->latest()->paginate(10);
        }

        if ($sort === 'price-ascending') {
            $products = $products->orderBy('price')->paginate(10);
        }

        if ($sort === 'price-descending') {
            $products = $products->orderBy('price', 'desc')->paginate(10);
        }

        if ($sort === 'title-ascending') {
            $products = $products->orderBy('name')->paginate(10);
        }

        if ($sort === 'title-descending') {
            $products = $products->orderBy('name', 'desc')->paginate(10);
        }

        if ($sort === 'created-descending') {
            $products = $products->orderBy('created_at', 'desc')->paginate(10);
        }

        if ($sort === 'created-ascending') {
            $products = $products->orderBy('created_at')->paginate(10);
        }

        return view('shop.page.sale_products', compact('products'));
    }

    public function getCategory(Request $request, $slug)
    {
        $category = Category::query()->where('slug', $slug)->first();
        $products = Product::query()->whereHas('category', function ($query) use ($category) {
             $query->where('parent_id', $category->id)
                  ->orWhere('id', $category->id);
        })->latest()->paginate(10);

        return view('shop.page.category_products', compact('products', 'category'));
    }
}
