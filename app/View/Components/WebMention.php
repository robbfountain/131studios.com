<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * Class WebMention.
 */
class WebMention extends Component
{
    /**
     * @var
     */
    public $mention;

    /**
     * Create a new component instance.
     *
     * @param $mention
     */
    public function __construct($mention)
    {
        $this->mention = $mention;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.web-mention');
    }
}
