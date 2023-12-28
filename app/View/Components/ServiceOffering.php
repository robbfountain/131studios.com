<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceOffering extends Component
{
    public $service;

    public $image;

    /**
     * Create a new component instance.
     *
     * @param  $image
     */
    public function __construct($service, $image)
    {
        $this->service = $service;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.service-offering');
    }
}
