<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use JD\Cloudder\Facades\Cloudder;
use Laravel\Scout\Searchable;
use OneThirtyOne\Mime\Message;
use Spatie\Url\Url;

/**
 * Class Blog.
 */
class Blog extends Model
{
    use Searchable;

    /**
     * Tweet.
     */
    const TWEET = 'Tweet';

    /**
     * Link.
     */
    const LINK = 'Link';

    /**
     * Original.
     */
    const ORIGINAL = 'Original';

    /**
     * Project.
     */
    const PROJECT = 'Project';

    /**
     * @var bool
     */
    protected $truncated = false;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var array
     */
    protected $casts = [
        'is_published' => 'bool',
        'is_featured' => 'bool',
        'project_title' => 'string',
    ];

    /**
     * @var array
     */
    protected $imageOptions = [
        'fetch_format' => 'auto',
        'width' => 'auto',
        'crop' => 'fit',
    ];

    /**
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * @var array
     */
    protected $appends = [
        'minutes_to_read',
    ];

    /**
     * @var array
     */
    protected $with = ['category'];

    /**
     * @param \OneThirtyOne\Mime\Message $message
     *
     * @return mixed
     */
    public static function hasCurrentBlogPost(Message $message)
    {
        return self::where('title', $message->subject)->exists();
    }

    /**
     * Boot.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
            $blog->user_id = Auth::check() ? Auth::id() : 1;
            $blog->project_title = $blog->category->name == self::PROJECT
                ? $blog->blogTitleToProjectTitle()
                : null;
        });
    }

    /**
     *  Algolia Search Array.
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['category'] = $this->category->name;
        $array['minutes_to_read'] = $this->minutesToRead();
        $array['link_to_full_post'] = $this->getLinkToFullPost();
        $array['published_for_humans'] = $this->published_at->format('M d, Y');

        return $array;
    }

    /**
     * @return float
     */
    public function minutesToRead()
    {
        return ceil(str_word_count($this->body) / 300);
    }

    /**
     * @return mixed|string
     */
    public function getLinkToFullPost()
    {
        if ($this->category->name == self::TWEET) {
            return $this->tweet;
        }

        if ($this->category->name == self::LINK) {
            return $this->reference_url;
        }

        return $this->shareUrl();
    }

    /**
     * @return string
     */
    public function shareUrl()
    {
        return route('blog.show', $this->slug);
    }

    /**
     * @return bool
     */
    public function isOriginal()
    {
        return $this->category->name === self::ORIGINAL;
    }

    /**
     * @return mixed
     */
    public function shouldBeSearchable()
    {
        return $this->isPublished();
    }

    /**
     * @return mixed
     */
    public function isPublished()
    {
        return $this->is_published;
    }

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return mixed
     */
    public function blogTitleToProjectTitle()
    {
        return str_replace(
            $this->titleSearchTerms(),
            $this->titleReplaceTerms(),
            $this->title
        );
    }

    /**
     * @return array
     */
    private function titleSearchTerms()
    {
        return [
            'Website Launched',
            'Website Released',
            'Released',
        ];
    }

    /**
     * @return string
     */
    private function titleReplaceTerms()
    {
        return '';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return bool
     */
    public function publish()
    {
        return tap($this)->update([
            'is_published' => true,
        ]);
    }

    /**
     * @return bool
     */
    public function unpublish()
    {
        return tap($this)->update([
            'is_published' => false,
        ]);
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeUnpublished($query)
    {
        return $query->where('is_published', false);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param $value
     */
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = ! is_null($value) ? $value : now();
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopePublished($query)
    {
        return Auth::check() && Auth::user()->isAdmin()
            ? $query
            : $query->where('is_published', true);
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeWaitingForTweet($query)
    {
        return $query->where([
            ['is_published', '=', true],
            ['tweet_id', '=', null],
        ])->whereBetween('published_at', [
            Carbon::now()->startOfDay(),
            Carbon::now(),
        ]);
    }

    /**
     * @return string
     */
    public function preview()
    {
        return strip_tags(
            Str::words($this->toHtml(), 50, '...')
        );
    }

    /**
     * @return string
     */
    public function toHtml()
    {
        return (new \Parsedown)->text(
            $this->truncated
                ? Str::words($this->body, 50, '...')
                : $this->body
        );
    }

    /**
     * @return $this
     */
    public function truncated()
    {
        $this->truncated = true;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinutesToReadAttribute()
    {
        return $this->minutesToRead();
    }

    /**
     * @param array $options
     *
     * @return string
     */
    public function imageUrl($options = [])
    {
        return request()->secure()
            ? Cloudder::secureShow($this->image, array_merge($this->imageOptions, $options))
            : Cloudder::show($this->image, array_merge($this->imageOptions, $options));
    }

    /**
     * @return bool
     */
    public function hasImage()
    {
        return ! is_null($this->image);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webmention()
    {
        return $this->hasMany(WebMention::class)->orderBy('id', 'DESC');
    }

    /**
     * @return string
     */
    public function referenceUrl()
    {
        return Url::fromString($this->reference_url)->getHost();
    }

    /**
     * @param $value
     *
     * @return mixed|string
     */
    public function getLinkToFullPostAttribute($value)
    {
        return $this->getLinkToFullPost();
    }

    /**
     * @return string
     */
    public function tweetUrl()
    {
        return 'https://twitter.com/131studios/status/'.$this->tweetId();
    }

    /**
     * @return mixed|null
     */
    public function tweetId()
    {
        return ! is_null($this->tweet_id) ? $this->tweet_id : (! is_null($this->tweet) ? $this->tweet : null);
    }

    /**
     * @return bool
     */
    public function isProject()
    {
        return $this->category->name == self::PROJECT;
    }

    /**
     * @return mixed
     */
    public function blogTitle()
    {
        return $this->isProject() ? $this->blogTitleToProjectTitle() : $this->title;
    }
}
