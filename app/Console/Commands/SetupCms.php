<?php

namespace App\Console\Commands;

use App\User;
use Backpack\PermissionManager\app\Models\Role;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SetupCms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initial 131 Studios CMS Setup';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if($setupComplete = DB::table('settings')->where('key', 'setup_complete')->first())
        {
            $this->error('Setup has already been completed');
            return;
        }
       
        $this->info('Create Initial Administrator Account');

        $name = $this->ask('Full Name of Admin User');
        $email = $this->ask('Email Address of Admin User');
        $password = $this->secret('Password for Admin User (hidden)');
        $confirm = $this->secret('Confirm Password');

        if($password != $confirm)
        {
            $this->error('Passwords do not match');
            return;
        }

        $newUser = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

       $this->info("User {$newUser->name} created");

       $newRole = Role::create(['name' => 'Administrator']);
       $this->info('Administrator Role Created');

       $newUser->assignRole('Administrator');
       $this->info("User {$newUser->name} added to {$newRole->name} role.");

       DB::table('settings')->insert([
            'key' => 'setup_complete',
            'name'  =>  'Setup Complete',
            'description' => 'Completed command setup',
            'value' => 1,
            'field' => json_encode('radio'),
            'active' => 0,
        ]);

       $this->info('Setup Complete');
    }
}
