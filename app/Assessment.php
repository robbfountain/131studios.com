<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Assessment extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->uuid = $model->uuid ?? Str::uuid();
        });
    }

    /**
     * @param $uuid
     * @return mixed
     */
    public static function findByUuid($uuid)
    {
        if ($uuid) {
            return self::where('uuid', $uuid)->firstOrNew();
        }

        if (session()->has('_seo-assessment')) {
            return self::where('uuid', session('_seo-assessment'))->firstOrNew();
        }

        return new self();
    }
}
