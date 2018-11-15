<?php

namespace App;

use Cartalyst\Tags\TaggableInterface;
use Cartalyst\Tags\TaggableTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Project extends Model implements TaggableInterface
{

    use Sluggable, SluggableScopeHelpers, TaggableTrait;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var array
     */
    protected $casts = [
        'hidden' => 'boolean',
        'visible' => 'boolean',
    ];

    /**
     * @var array
     */
    protected $with = ['category'];

    /**
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ],
        ];
    }


    /**
     * @return mixed
     */
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->title;
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeVisible($query)
    {
        return $query->where('visible', true);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Contracts\Routing\UrlGenerator|mixed|string
     */
    public function imagePath()
    {
        return starts_with($this->primary_image, 'http')
            ? $this->primary_image
            : url($this->primary_image);
    }

    public function tagString()
    {
        $string = '';
        foreach ($this->tags as $tag) {
            $string .= ' ' . $tag->name;
        }
         dump($string);
        return $string;
    }

}
