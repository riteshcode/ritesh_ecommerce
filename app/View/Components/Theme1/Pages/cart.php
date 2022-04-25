<?php

namespace App\View\Components\Theme1\Pages;

use Illuminate\View\Component;

class Cart extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.theme1.pages.cart', $this->data);
    }
}
