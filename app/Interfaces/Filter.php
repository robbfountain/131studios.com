<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface Filter
{
    /**
     * @param  Collection  $items
     * @return Collection
     */
    public function apply(Collection $items): Collection;
}
