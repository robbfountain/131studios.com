<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    protected $table = 'projects';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
     protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
    	'alternate_images' => 'array',
    ];

    public function sluggable() 
    {
    	return [
    		'slug'	=> [
    			'source'	=> 'slug_or_title',
    		],
    	];
    } // sluggable	

    /*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/
	// The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }
        return $this->title;
    }

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
