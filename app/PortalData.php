<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class PortalData extends Model
{
    use CrudTrait;

    protected $fillable = ['portal_id','time_period','data'];
    protected $table = 'portal_data';

    protected $casts = [
        'data' => 'array',
    ];
    
    public function portal()
    {
        return $this->belongsTo(Portal::class);
    }

    public function getUsers()
    {
        return $this->data['users'];
    }

    public function client()
    {
        return $this->belongsTo(User::class);
    }


}
