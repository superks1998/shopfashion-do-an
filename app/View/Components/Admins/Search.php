<?php

namespace App\View\Components\Admins;

use App\Components\Recusive;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Search extends Component
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
     * @return View
     */
    public function render(): View
    {
        $recusive = new Recusive(Category::all());
        $htmlOptionSearchHeader = $recusive->handleRecusive($parentId = '');

        return view('components.admins.search', compact('htmlOptionSearchHeader'));
    }
}
