<?php

namespace App\Classes\Filters;

use App\Interfaces\Filter;
use Illuminate\Support\Collection;

class Category implements Filter
{
    /**
     * @var string
     */
    protected string $category;

    /**
     * @param $category
     */
    public function __construct($category)
    {
        $this->category = $category;
    }

    public function apply(Collection $items): Collection
    {
        return $items->filter(function ($item) {
            return in_array($this->category, explode(',', $item['object']->matter('categories')));
        });
    }
}
