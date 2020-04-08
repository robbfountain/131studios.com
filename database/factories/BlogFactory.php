<?php

use App\Blog;
use App\Category;
use App\User;
use DavidBadura\FakerMarkdownGenerator\FakerProvider;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $faker->addProvider(new FakerProvider($faker));

    return [
        'category_id' => factory(Category::class)->create()->id,
        'user_id' => factory(User::class)->create()->id,
        'title' => $faker->sentence,
        'image' => $faker->imageUrl(),
        'is_published' => true,
        'published_at' => $faker->dateTimeBetween('-1 hour', 'now'),
        'is_featured' => false,
        'body' => $faker->markdown(),
        'tweet_id' => $faker->word,
    ];
});

$factory->state(Blog::class, 'project', function (Faker $faker) {
    return [
        'category_id' => Category::where('name', 'Project')->first()->id,
    ];
});

$factory->state(Blog::class, 'unpublished', function (Faker $faker) {
    return [
        'is_published' => false,
        'tweet_id' => null,
    ];
});

$factory->state(Blog::class, 'future', function (Faker $faker) {
    return [
        'is_published' => false,
        'published_at' => $faker->dateTimeBetween('+1 day', '+1 month'),
        'tweet_id' => null,
    ];
});

$factory->state(Blog::class, 'tweet', function (Faker $faker) {
    return [
        'tweet' => 'https://twitter.com/'.$faker->word.'/'.$faker->word,
    ];
});

$factory->state(Blog::class, 'url', function (Faker $faker) {
    return [
        'reference_url' => $faker->url,
    ];
});

$factory->state(Blog::class, 'notTweeted', function (Faker $faker) {
    return [
        'tweet_id' => null,
    ];
});
