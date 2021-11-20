<?php

namespace App\Classes;

use Carbon\Carbon;
use App\Interfaces\Filter;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
