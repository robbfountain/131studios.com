<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    public static function byVimeoId($id)
    {
        return self::where('video_id', $id)->first();
    }

    public function incrementViews()
    {
        return tap($this)->update([
            'views' => $this->views++,
        ]);
    }

    public function views()
    {
        return $this->hasMany(VideoView::class);
    }
}
