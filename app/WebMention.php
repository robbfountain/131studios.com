<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WebMention
 * @package App
 */
class WebMention extends Model
{
    /**
     * Reply
     */
    const TYPE_REPLY = 'replied';

    /**
     * Like
     */
    const TYPE_LIKE = 'liked';

    /**
     * Retweet
     */
    const TYPE_RETWEET = 'retweeted';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
