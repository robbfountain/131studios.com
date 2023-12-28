<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategoryLink extends Component
{
    /**
     * @var
     */
    public $slug;

    /**
     * Create a new component instance.
     *
     * @param  $slug
     */
    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.category-link');
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return request()->get('c') == $this->slug;
    }
}
