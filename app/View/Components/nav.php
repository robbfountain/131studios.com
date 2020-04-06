<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * Class nav
 * @package App\View\Components
 */
class nav extends Component
{
    /**
     * @var
     */
    public $to;

    /**
     * Create a new component instance.
     *
     * @param $to
     */
    public function __construct($to)
    {
        $this->to = $to;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.nav');
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return request()->url() == $this->to;
    }
}
