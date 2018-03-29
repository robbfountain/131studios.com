<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Project::class, function (Faker $faker) {
    return [
        'category_id'     => 1,
        'title'           => $faker->word . ' ' . $faker->word,
        'sub_title'       => $faker->word,
        'description'     => $faker->paragraph,
        'primary_image'   => $faker->imageUrl($width = 640, $height = 480),
        'alternate_image' => $faker->imageUrl($width = 640, $height = 480),
        'hidden'          => false,
        'url'             => $faker->url,
    ];
});
