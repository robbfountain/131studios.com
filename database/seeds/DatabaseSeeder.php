<?php

use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Project']);

        $this->call(UsersTableSeeder::class);
        $this->call(BlogTableSeeder::class);
    }
}
