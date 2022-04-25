<?php

namespace App\View\Components\theme2\pages;

use Illuminate\View\Component;

class contact extends Component
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
        return view('components.theme2.pages.contact', ['data'=>$this->data]);
    }
}
