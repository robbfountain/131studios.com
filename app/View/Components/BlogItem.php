<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogItem extends Component
{
    public $blog;

    /**
     * Create a new component instance.
     *
     * @param $blog
     */
    public function __construct($blog)
    {
        //
        $this->blog = $blog;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog-item');
    }
}
