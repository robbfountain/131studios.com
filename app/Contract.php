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

    protected $appends = [
        'balance',
    ];

    public function getBalanceAttribute()
    {
        return number_format($this->total_cost - $this->deposit, 2);
    }
}
