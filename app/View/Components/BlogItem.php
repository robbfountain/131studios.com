<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * Class BlogItem
 * @package App\View\Components
 */
class BlogItem extends Component
{
    /**
     * @var
     */
    public $blog;

    /**
     * @var string
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @param        $blog
     * @param string $type
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

    /**
     * @return bool
     */
    public function isColumn()
    {
        return $this->type === 'col';
    }
}
