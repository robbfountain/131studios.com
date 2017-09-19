<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    use CrudTrait;

    protected $fillable = ['client_id','url','access_token'];

    public function client()
    {
        return $this->belongsTo(User::class);
    }
}
