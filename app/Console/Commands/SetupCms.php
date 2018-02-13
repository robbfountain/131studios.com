<?php

namespace App\Console\Commands;

use App\User;
use Backpack\PermissionManager\app\Models\Role;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Backpack\PermissionManager\app\Models\Permission;

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
        // Migrate Database
        $this->call('migrate');

        // Check for setup variable in database
        if($setupComplete = DB::table('settings')->where('key', 'setup_complete')->first())
        {
            $this->error('Setup has already been completed');
            return;
        }

        // Create admin user
        $this->info('Create Initial Administrator Account');

        // User input
        $name = $this->ask('Full Name of Admin User');
        $email = $this->ask('Email Address of Admin User');
        $password = $this->secret('Password for Admin User (hidden)');
        $confirm = $this->secret('Confirm Password');
        //
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

       $canEditAll = Permission::create(['name' => 'Edit All Articles']);
       $canEditOwn = Permission::create(['name' => 'Edit Own Articles']);
       $calDeleteOwn = Permission::create(['name' => 'Delete Own Articles']);
       $canCreateArticles = Permission::create(['name' => 'Create Articles']);
       $canAccessAdminPanel = Permission::create(['name' => 'Access Admin Panel']);

       $adminRole = Role::create(['name' => 'Administrator']);
       $authorRole = Role::create(['name' => 'Author']);
       $editorRole = Role::create(['name' => 'Editor']);
       $clientRole = Role::create(['name' => 'Client']);

       $adminRole->givePermissionTo('Access Admin Panel');

       $authorRole->givePermissionTo('Edit Own Articles');
       $authorRole->givePermissionTo('Create Articles');
       $authorRole->givePermissionTo('Delete Own Articles');
       $authorRole->givePermissionTo('Access Admin Panel');

       $editorRole->givePermissionTo('Edit All Articles');
       $editorRole->givePermissionTo('Access Admin Panel');

       $this->info('Roles and Permissions Created');

       $newUser->assignRole('Administrator');
       $this->info("User {$newUser->name} added to {$adminRole->name} role.");

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
