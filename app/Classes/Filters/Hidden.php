<?php

namespace App\Classes\Filters;

use App\Interfaces\Filter;
use Illuminate\Support\Collection;

class Hidden implements Filter
{
    /**
     * @param  Collection  $items
     * @return Collection
     */
    public function apply(Collection $items): Collection
    {
        return $items->filter(function ($item) {
            return $item['object']->matter('hidden') === false;
        });
    }
}
