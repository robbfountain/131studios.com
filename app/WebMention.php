<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebMention extends Model
{
    const TYPE_REPLY = 'reply';
    const TYPE_LIKE = 'like';
    const TYPE_RETWEET = 'retweet';

    protected $guarded = [];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
