<?php

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
        \App\Category::create(['name' => 'Project']);

        $this->call(UsersTableSeeder::class);
        $this->call(BlogTableSeeder::class);

    }
}
