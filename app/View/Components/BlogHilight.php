<?php

namespace App\View\Components;

use App\Blog;
use Illuminate\View\Component;

class BlogHilight extends Component
{
    /**
     * @var \App\Blog
     */
    public Blog $blog;

    /**
     * Create a new component instance.
     *
     * @param  \App\Blog  $blog
     */
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog-hilight');
    }
}
