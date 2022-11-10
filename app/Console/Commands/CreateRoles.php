<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

class CreateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:role {role?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates Role';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->argument('role') ? Role::create(['name' => $this->argument('role')])
            :
            DB::transaction(function () {
                Role::create(['name' => ROLE_ADMIN]);
                Role::create(['name' => ROLE_CUSTOMER]);
                Role::create(['name' => ROLE_MANAGER]);
            });

        return Command::SUCCESS;
    }
}
