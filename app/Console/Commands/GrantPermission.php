<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GrantPermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:grant {permission} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Grants a permission to a user';

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
        $user = User::where('email', $this->argument('email'))->firstOrFail();
        $user->givePermissionTo($this->argument('permission'));
        $this->info('Permission assigned to user');
    }
}
