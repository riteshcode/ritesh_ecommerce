<?php

namespace App\View\Components\Theme1\Pages;

use Illuminate\View\Component;
use App\Models\Category;

class Welcome extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // dd($activetheme);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $popular_category=Category::popularCategory();
        //dd($popular_category);
        return view('components.theme1.pages.welcome',compact('popular_category'));
    }
}
