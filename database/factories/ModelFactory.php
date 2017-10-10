<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function(Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\PortalData::class, function(Faker\Generator $faker) {

    return [
        'portal_id'   => factory(App\Portal::class)->create()->id,
        'time_period' => $faker->month($max = 'now'),
        'data'        => [
            'users'       => $faker->numberBetween(10, 50),
            'total_files' => $faker->numberBetween(1000, 5000),
            'file_size'   => $faker->numberBetween(100000, 1000000),
        ],
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Portal::class, function(Faker\Generator $faker) {

    return [
       'client_id' => factory(App\User::class)->create()->id,
        'url' => $faker->url,
        'access_token' => $faker->sha256,
    ];
});

