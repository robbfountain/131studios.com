<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageInsight extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'audits' => 'array',
        'categories' => 'array',
    ];
}
