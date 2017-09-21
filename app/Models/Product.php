<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use CrudTrait;

    protected $fillable = ['name'];

    public function license()
    {
        return $this->hasMany(License::class);
    }

}
