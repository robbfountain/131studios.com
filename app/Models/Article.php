<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Article extends Model
{
    use CrudTrait,Sluggable, SluggableScopeHelpers;


    /**
     * @var string
     */
    protected $table = 'articles';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = ['slug', 'title', 'content', 'image', 'status', 'category_id', 'featured', 'date', 'user_id'];

    /**
     * @var array
     */
    protected $casts = [
        'featured' => 'boolean',
        'date' => 'date',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('Backpack\NewsCRUD\app\Models\Category', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('Backpack\NewsCRUD\app\Models\Tag', 'article_tag');
    }


    /**
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED')
                     ->where('date', '<=', date('Y-m-d'))
                     ->orderBy('date', 'DESC');
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
}
