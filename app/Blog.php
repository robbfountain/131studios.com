<?php

namespace App;

use App\Classes\ParseMarkdown;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Tags\HasTags;

/**
 * Class Blog
 * @package App
 */
class Blog extends Model
{
    use HasTags;

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
    ];

    /**
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * Boot
     */
    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where([
            ['is_published','=',true],
            ['published_at','<=', now()]
        ]);
    }

    /**
     * @return string
     */
    public function toHtml()
    {
        return (new \Parsedown())->text($this->body);
    }

    public function preview()
    {
        return strip_tags(substr($this->toHtml(), 0, 100));
    }

    public function shareUrl()
    {
        return route('blog.show',$this->slug);
    }

    public function imageUrl()
    {
        return config('app.url') . '/storage/' . $this->image;
    }
}
