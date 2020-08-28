<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $guarded = [];

    protected $casts = [
        'starts_at' => 'date',
        'approval_milestone' => 'date',
        'ends_at' => 'date',
    ];
}
