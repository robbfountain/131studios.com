<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use App\Classes\PageInsights;
use Illuminate\View\Component;

class Score extends Component
{
    public $style;
    public $type;
    public $score;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $score)
    {
        $this->type = $type;
        $this->score = $score;
    }

    public function styles()
    {
        $scale = PageInsights::ratingScale($this->type);

        foreach ($scale as $key => $style) {
            if ($this->score <= (float) $key) {
                return $style;
            }
        }

        return Arr::last($scale);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.score');
    }
}
