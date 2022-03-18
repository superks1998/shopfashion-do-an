<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    protected $guarded = ['id'];

    protected $casts = [
        'price' => 'float',
    ];

    protected $status = [
        1 => [
            'name' => 'public',
            'class' => 'primary',
        ],
        0 => [
            'name' => 'private',
            'class' => 'danger',
        ],
    ];

    protected $hotStatus = [
        1 => [
            'name' => 'nổi bật',
            'class' => 'success',
        ],
        0 => [
            'name' => 'không',
            'class' => 'danger',
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->status, $this->active, '[N\A]');
    }

    public function getHot()
    {
        return Arr::get($this->hotStatus, $this->hot, '[N\A]');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getNumberPriceAttributes()
    {
        return number_price($this->price, $this->sale);
    }

    public function getProductSearch($request)
    {
        $products = new Product();
        if (!empty($request->product_id)) {
            $products = $products->where('products.id', $request->product_id);
        }
        if (!empty($request->name)) {

            $products = $products->where('products.name', 'like', '%' . $request->name . '%');
        }

        if (!empty($request->category_id)) {

            $products = $products->where('products.category_id', $request->category_id);
        }

        if (!empty($request->brand_id)) {
            $products = $products->where('products.brand_id', $request->brand_id);
        }

        $products = $products
            ->select('products.*')
            ->latest()
            ->paginate(5);

        return $products;
    }
}
