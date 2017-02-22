<?php

namespace App\Console\Commands;

use App\User;
use Backpack\PermissionManager\app\Models\Permission;
use Backpack\PermissionManager\app\Models\Role;
use Illuminate\Console\Command;

class AssignPermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:assign {permission} {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assigns a permission to a role';

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
        $role = Role::where('name', $this->argument('role'))->firstOrFail();        
        $role->givePermissionTo($this->argument('permission'));
        $this->info('Permission Assigned to Role');
    }
}
