<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Contract::class, function (Faker $faker) {
    return [
        'uuid',
    ];
});
