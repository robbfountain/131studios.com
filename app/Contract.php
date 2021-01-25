<?php

namespace App;

use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        Contract::saving(function ($model) {
            if (is_null($model->deposit)) {
                $model->deposit = 0.00;
            }
        });

        Contract::updating(function ($model) {
            if (is_null($model->deposit)) {
                $model->deposit = 0.00;
            }
        });

        Contract::creating(function ($model) {
            $model->uuid = Str::uuid();
            $model->signed_url = URL::signedRoute('contract.show', ['uuid' => $model->uuid]);
        });
    }

    public function getBalanceAttribute()
    {
        return number_format($this->total_cost - $this->deposit, 2);
    }
}
