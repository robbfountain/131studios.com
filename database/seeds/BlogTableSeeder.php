<?php

use App\Blog;
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
        factory(Blog::class, 10)->create(['user_id' => 1]);
        factory(Blog::class, 2)->create(['user_id' => 1, 'category_id' => 1]);

    }
}
