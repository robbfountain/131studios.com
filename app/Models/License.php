<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class License extends Model
{
    protected $guarded = ['id'];

    use CrudTrait;

     public function product()
     {
         return $this->belongsTo(Product::class);
     }

     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
