<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Robb Fountain',
            'email' => 'robb@131studios.com',
            'password' => bcrypt('password'),
        ]);
    }
}
