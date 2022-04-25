<?php

namespace App\View\Components\Theme1\SharedComponent;

use Illuminate\View\Component;

class CategoryWithMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->category);
        return view('components.theme1.shared-component.category-with-menu',[
            'category'=>$this->category
        ]);
    }
}
