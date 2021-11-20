<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class BlogReader extends FileReader
{
    /**
     * @var string
     */
    protected static string $disk = 'blogs';

    /**
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->items->map(function ($item) {
            return new Blog($item);
        });
    }
}
