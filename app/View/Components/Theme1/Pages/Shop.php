<?php

namespace App\View\Components\theme1\pages;

use Illuminate\View\Component;

class shop extends Component
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
        // dd($this->data);
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->data);
        return view('components.theme1.pages.shop', $this->data);
    }
}
