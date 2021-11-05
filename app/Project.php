<?php

namespace App;

use App\Traits\HandlesImages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
            $this->truncated
                ? Str::words($this->content, 50, '...')
                : $this->body
        );
    }
}
