<?php

namespace App;

use Illuminate\Support\Str;
use App\Traits\HandlesImages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory, HandlesImages;

    protected $guarded = [];

    /**
     * Boot.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * @return string
     */
    public function toHtml()
    {
        return (new \Parsedown)->text(
            $this->content
        );
    }
}
