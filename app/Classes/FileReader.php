<?php

namespace App\Classes;

use App\Interfaces\Filter;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;

abstract class FileReader
{
    /**
     * @var Collection
     */
    public Collection $items;

    /**
     * @var int|null
     */
    protected ?int $take = null;

    /**
     * @var string
     */
    protected string $sortBy = 'desc';

    /**
     * @param $items
     */
    public function __construct($items)
    {
        $this->items = $items;
    }


    /**
     * @return FileReader
     */
    public static function fromFilesystem(): FileReader
    {
        $items = collect(Storage::disk(static::$disk)
            ->allFiles())
            ->map(function ($item) {
                $object = YamlFrontMatter::parse(Storage::disk(static::$disk)->get($item));

                return [
                    'object' => $object,
                    'path' => $item,
                    'slug' => (string) Str::of($item)->basename('.md'),
                    'published' => Carbon::parse($object->matter('published')),
                    'hidden' => (bool) $object->matter('hidden'),
                    'categories' => $object->matter('categories'),
                    'url' => $object->matter('url'),
                    'preview_image' => $object->matter('preview_image'),
                    'preview_image_twitter' => $object->matter('preview_image_twitter'),
                ];
            });

        return new static($items);
    }

    /**
     * @return mixed
     */
    abstract public function get();

    /**
     * @return BlogReader
     */
    public function asc(): FileReader
    {
        $this->sortBy = 'asc';

        $this->sortBy();

        return $this;
    }

    /**
     * Sorts the blog collection.
     */
    public function sortBy()
    {
        if ($this->sortBy == 'desc') {
            $this->items = $this->items->sortByDesc('published');
        }
    }

    /**
     * @param $take
     * @return BlogReader
     */
    public function take($take): FileReader
    {
        $this->take = $take;

        $this->items = $this->items->take($this->take);

        return $this;
    }

    /**
     * @param  array  $filters
     * @return BlogReader
     */
    public function applyFilters(array $filters): FileReader
    {
        foreach ($filters as $filter) {
            if ($filter instanceof Filter) {
                $this->items = $filter->apply($this->items);
            }
        }

        return $this;
    }

    /**
     * @return BlogReader
     */
    public function desc(): FileReader
    {
        $this->sortBy = 'desc';

        $this->sortBy();

        return $this;
    }
}
