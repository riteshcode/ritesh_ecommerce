<?php

namespace App\View\Components\Theme1\SharedComponent;

use Illuminate\View\Component;

class Product extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $data;
    public $viewtype;
    public function __construct($viewtype, $data)
    {
        $this->data = $data;
        $this->viewtype = $viewtype;
         //dd($this->data);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.theme1.shared-component.product',[
            'product'=>$this->data,
            'viewtype'=>$this->viewtype
        ]);
    }
}
