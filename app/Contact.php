<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	use CrudTrait;
	
    protected $guarded = ['id'];

    protected $casts = [
    	'host'	=>	'boolean',
    ];
}
