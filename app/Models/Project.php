<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    use CrudTrait, Sluggable, SluggableScopeHelpers;

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @var array
     */
    protected $casts = [
        'hidden' => 'boolean',
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
        if($this->slug != '') {
            return $this->slug;
        }

        return $this->title;
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeVisible($query)
    {
        return $query->where('hidden', false);
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
        return starts_with('http://', $this->primary_image)
            ? $this->primary_image
            : url($this->primary_image);
    }

}
