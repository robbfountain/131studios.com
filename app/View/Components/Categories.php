<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * Class Categories.
 */
class Categories extends Component
{
    /**
     * @var
     */
    public $categories;

    /**
     * Create a new component instance.
     *
     * @param  $categories
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
