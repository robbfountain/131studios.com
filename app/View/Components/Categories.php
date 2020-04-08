<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Categories extends Component
{
    public $categories;

    /**
     * Create a new component instance.
     *
     * @param $categories
     */
    public function __construct($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.categories');
    }
}
