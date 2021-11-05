<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Feature extends Component
{
    public $icon;

    /**
     * Create a new component instance.
     *
     * @param $icon
     */
    public function __construct($icon = null)
    {
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.feature');
    }
}
