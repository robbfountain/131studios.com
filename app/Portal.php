<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    use CrudTrait;

    /**
     * @var array
     */
    protected $fillable = ['client_id','url','access_token','callback'];

    /**
     * @var array
     */
    protected $casts = [
        'callback' => 'boolean',
    ];


    /**
     *  Boot
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function($portal) {
                $portal->data->delete();
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function data()
    {
        return $this->hasMany(PortalData::class);
    }
}
