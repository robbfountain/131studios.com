<?php

namespace App\Traits;

use function decrypt;
use function encrypt;

trait ClientTrait
{
    public function setAccountKeyAttribute($value)
    {
        $this->attributes['account_key'] = encrypt($value);
    }

    public function getAccountKeyAttribute()
    {
        return decrypt($this->account_key);
    }

    public function scopeIsClient($query, $id)
    {
        return $query->where('account_id', $id)->exists();
    }

    public function scopeByClient($query, $id)
    {
        return $query->where('account_id',$id);
    }
}