<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;
use App\Models\Cart;

class Header extends Component
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
        $CategoryTree = Category::CategoryTree();
        $cart = Cart::allItemWithTotal(request());
        // dd($CategoryTree);
        $theme = config('app.theme');
        return view('components.'.$theme.'.header', [
            'CategoryTree' => $CategoryTree,
            'cart'=>$cart,
        ]);
    }
}
