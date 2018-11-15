<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create([
            'name' => 'Robb Fountain',
            'email' => 'robb@131studios.com',
            'password' => bcrypt('password'),
        ]);
    }
}
