<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogItem extends Component
{
    public $blog;

    public $type;

    /**
     * Create a new component instance.
     *
     * @param $blog
     */
    public function __construct($blog, $type = 'col')
    {
        $this->blog = $blog;
        $this->type = $type;
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

    public function isColumn()
    {
        return $this->type === 'col';
    }
}
