<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortalData extends Model
{
    protected $fillable = ['portal_id','time_period','data'];
    protected $table = 'portal_data';

    protected $casts = [
        'data' => 'array',
    ];
}
