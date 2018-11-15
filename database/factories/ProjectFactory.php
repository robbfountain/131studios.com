<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'category_id'     => factory('App\Category')->create()->id,
        'title'           => $faker->word . ' ' . $faker->word,
        'description'     => $faker->paragraph,
        'primary_image'   => $faker->imageUrl($width = 640, $height = 480),
        'alternate_image' => $faker->imageUrl($width = 640, $height = 480),
        'hidden'          => $faker->boolean,
        'url'             => $faker->url,
    ];
});
