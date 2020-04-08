<?php

namespace App\Classes;

use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use OneThirtyOne\Mime\Message;

/**
 * Class BlogImporter.
 */
class BlogImporter
{
    /**
     * @var
     */
    protected $body;

    /**
     * @var
     */
    protected $title;

    /**
     * @var
     */
    protected $author;

    /**
     * @var
     */
    protected $category;

    /**
     * @var array
     */
    protected $regexp = [
        'publish' => '/\@publish\((.*?)\)/',
        'tweet' => '/\@tweet\((.*?)\)/',
        'referenceUrl' => '/\@referenceUrl\((.*?)\)/',
    ];

    /**
     * BlogImporter constructor.
     *
     * @param $title
     * @param $body
     * @param $author
     */
    public function __construct($title, $body, $author)
    {
        $this->body = $body;
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * @param \OneThirtyOne\Mime\Message $message
     *
     * @return \App\Classes\BlogImporter
     */
    public static function messageToBlogPost(Message $message)
    {
        return new static($message->subject, $message->body, $message->from);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function toArray()
    {
        return [
            'category_id' => $this->categoryFromSubject(),
            'title' => $this->titleFromSubject(),
            'body' => $this->blogPostFromBody(),
            'is_published' => $this->shouldBePublished(),
            'published_at' => $this->publishDate(),
            'reference_url' => $this->referenceUrlFromBody(),
            'tweet' => $this->tweetFromBody(),
        ];
    }

    /**
     * @return int
     * @throws \Exception
     */
    protected function categoryFromSubject()
    {
        if (! $this->category = Str::of($this->title)->match('/\[(.*?)\]/')) {
            throw new \Exception('Category Not Found');
        }

        return Category::firstOrCreate(['name' => $this->category])->id;
    }

    /**
     * @return mixed
     */
    protected function titleFromSubject()
    {
        return $this->category
            ? Str::of($this->title)->after($this->category)
            : $this->title;
    }

    /**
     * @return string|string[]|null
     */
    protected function blogPostFromBody()
    {
        return preg_replace('/\@(.*?)\((.*?)\)/', '', $this->body);
    }

    /**
     * @return bool
     */
    protected function shouldBePublished()
    {
        $publish = Str::of($this->body)->match('/\@publish\((.*?)\)/');

        return Carbon::parse($publish)->lte(Carbon::parse());
    }

    /**
     * @return \Carbon\Carbon
     */
    protected function publishDate()
    {
        $publish = Str::of($this->body)->match('/\@publish\((.*?)\)/');

        return ! $this->shouldBePublished()
            ? Carbon::parse($publish)
            : Carbon::now();
    }

    /**
     * @return null
     */
    protected function referenceUrlFromBody()
    {
        $referenceUrl = Str::of($this->body)->match('/\@referenceUrl\((.*?)\)/');

        return strlen($referenceUrl) ? $referenceUrl : null;
    }

    /**
     * @return null
     */
    protected function tweetFromBody()
    {
        $tweet = Str::of($this->body)->match('/\@tweet\((.*?)\)/');

        return strlen($tweet) ? $tweet : null;
    }
}
