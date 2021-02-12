<?php

namespace App;

use App\Events\ContractWasPublished;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Nova\Actions\Actionable;

/**
 * Class Contract
 * @package App
 */
class Contract extends Model
{
    use Actionable;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var string[]
     */
    protected $casts = [
        'starts_at' => 'date',
        'approval_milestone' => 'date',
        'ends_at' => 'date',
    ];

    protected $appends = [
        'balance',
    ];

    /**
     *
     */
    public static function boot()
    {
        parent::boot();

        Contract::updating(function ($model) {
            $model->uuid = $model->uuid ?? Str::uuid();
            $model->signed_url = $model->signed_url ?? URL::signedRoute('contract.show', ['uuid' => $model->uuid]);
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

    public function isPublished()
    {
        return $this->is_published;
    }

    public function publish()
    {
        return tap($this)->update([
            'is_published' => true
        ]);
    }
}
