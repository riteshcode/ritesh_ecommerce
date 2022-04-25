<?php

namespace App\View\Components\Theme1\SharedComponent;

use Illuminate\View\Component;
use App\Models\Product;

class NewArrival extends Component
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
        $newProduct = Product::NewArrival();
        // dd($newProduct);
        return view('components.theme1.shared-component.new-arrival',[
            'product'=>$newProduct
        ]);
    }
}