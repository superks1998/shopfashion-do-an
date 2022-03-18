<?php

namespace App\View\Components\Shop;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\View\Component;

class CartDetail extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $contents = Cart::content();

        return view('components.shop.cart-detail', compact('contents'));
    }
}
