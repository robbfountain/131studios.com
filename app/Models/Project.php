<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    use CrudTrait, Sluggable, SluggableScopeHelpers;

    protected $guarded = ['id'];

    protected $casts = [
        'hidden' => 'boolean',
    ];


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

    // The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if($this->slug != '') {
            return $this->slug;
        }

        return $this->title;
    }

    public function scopeVisible($query)
    {
        return $query->where('hidden', false);
    }

}
