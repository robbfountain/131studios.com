<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    use CrudTrait;

    protected $fillable = ['client_id','url','access_token','callback'];

    protected $casts = [
        'callback' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($portal) {
                $portal->data->delete();
        });
    }

    public function client()
    {
        return $this->belongsTo(User::class);
    }

    public function data()
    {
        return $this->hasMany(PortalData::class);
    }
}
