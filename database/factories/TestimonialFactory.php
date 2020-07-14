<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'profile_photo' => $faker->image(),
        'rating' => rand(3,5),
        'text' => $faker->paragraph
    ];
});
