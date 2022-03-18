<?php

namespace App\View\Components\Shop;

use App\Models\Product;
use Illuminate\View\Component;

class RelatedProducts extends Component
{
    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $category = $this->product->category;
        $relateProducts = Product::query()->whereHas('category', function ($query) use ($category) {
            $query->where('parent_id', $category->id)
                ->orWhere('id', $category->id);
        })->where('id', '!=', $this->product->id)->latest()->limit(5)->get();

        return view('components.shop.related-products', compact('relateProducts'));
    }
}
