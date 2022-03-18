<?php

namespace App\View\Components\Shop;

use Illuminate\View\Component;

class Category extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = \App\Models\Category::query()->with('categoryChildrent')->where('parent_id', 0)->get();

        return view('components.shop.category', compact('categories'));
    }
}
