<?php

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {

    $faker->addProvider(new \DavidBadura\FakerMarkdownGenerator\FakerProvider($faker));

    return [
        'category_id' => factory('App\Category')->create()->id,
        'title' => $faker->sentence,
        'is_published' => $faker->boolean,
        'published_at' => $faker->dateTime,
        'is_featured' => $faker->boolean,
        'body' => $faker->markdown(),
    ];
});
