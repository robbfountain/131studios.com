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
    const TYPE_REPLY = 'reply';

    /**
     * Like
     */
    const TYPE_LIKE = 'like';

    /**
     * Retweet
     */
    const TYPE_RETWEET = 'retweet';

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
