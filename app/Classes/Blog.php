<?php

namespace App\Classes;

use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\Document;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{
    /**
     * @var mixed
     */
    public $published;

    /**
     * @var mixed
     */
    public $slug;

    /**
     * @var YamlFrontMatter|mixed
     */
    public Document $object;

    /**
     * @var mixed
     */
    protected $path;

    /**
     * @param  $blog
     */
    public function __construct($blog)
    {
        $this->object = $blog['object'];
        $this->published = $blog['published'];
        $this->path = $blog['path'];
        $this->slug = $blog['slug'];
    }

    /**
     * @param  $path
     * @return Blog
     *
     * @throws FileNotFoundException
     */
    public static function getByPath($path): Blog
    {
        return new static([
            'object' => $object = YamlFrontMatter::parse(Storage::disk('blogs')->get($path)),
            'path' => $path,
            'slug' => (string) Str::of($path)->basename('.md'),
            'published' => Carbon::parse($object->matter('published')),
            'hidden' => (bool) $object->matter('hidden'),
            'categories' => $object->matter('categories'),
        ]);
    }

    /**
     * @return array|false|string[]
     */
    public function categories()
    {
        return ! is_null($this->object->matter('categories'))
            ? explode(',', Str::of($this->object->matter('categories'))->trim())
            : [];
    }

    /**
     * @return string
     */
    public function toHtml(): string
    {
        return Markdown::convertToHtml($this->object->body());
    }

    /**
     * @param  $property
     * @return mixed
     */
    public function __get($property)
    {
        if (method_exists($this, $property)) {
            return $this->{$property}();
        }

//        $toFormat = ['title'];
//        if (in_array($property, $toFormat)) {
//            return Str::of($this->object->matter($property))->title();
//        }

        return $this->object->matter($property);
    }

    /**
     * @return false|float
     */
    public function minutesToRead()
    {
        return ceil(str_word_count($this->object->body()) / 300);
    }

    /**
     * @return mixed
     */
    public function preview()
    {
        return $this->summary;
    }
}
