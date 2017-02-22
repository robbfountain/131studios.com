<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Backpack\PermissionManager\app\Models\Permission;

class CreatePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:create {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new permission';

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
        Permission::create(['name' => $this->argument('name')]);
        $this->info('Permisssion Created');
    }
}
