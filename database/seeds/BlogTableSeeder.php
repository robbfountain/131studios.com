<?php

use App\Blog;
use App\Category;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class)->create(['name' => 'Tweet']);
        factory(Category::class)->create(['name' => 'Link']);
        factory(Category::class)->create(['name' => 'Original']);

        factory(Blog::class, 5)->create([
            'user_id' => 1,
            'category_id' => 1,
        ]);

        factory(Blog::class, 5)->create([
            'user_id' => 1,
            'category_id' => 2,
        ]);

        factory(Blog::class, 5)->create([
            'user_id' => 1,
            'category_id' => 3,
        ]);

        factory(Blog::class, 5)->create([
            'user_id' => 1,
            'category_id' => 4,
        ]);

        factory(Blog::class, 5)->create([
            'user_id' => 1,
            'category_id' => 5,
        ]);
    }
}
