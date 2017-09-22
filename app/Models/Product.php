<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use CrudTrait;

    protected $fillable = ['name','yearly_price','monthly_price','support_term'];

    public function license()
    {
        return $this->hasMany(License::class);
    }

}
