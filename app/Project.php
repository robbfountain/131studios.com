<?php

namespace App;

use Illuminate\Support\Str;
use App\Traits\HandlesImages;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $query->where('is_published',true);
    }

    /**
     * @return string
     */
    public function toHtml()
    {
        return (new \Parsedown)->text(
            $this->truncated
                ? Str::words($this->body, 50, '...')
                : $this->preview."<br />\n".$this->body
        );
    }

}
