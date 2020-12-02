<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    public static function findByUuid($uuid)
    {
        return self::where('uuid', $uuid)->firstOrNew();
    }
}
