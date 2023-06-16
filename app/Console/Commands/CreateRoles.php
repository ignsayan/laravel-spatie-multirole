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
    protected $signature = 'create:role {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new role';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Role::create(['name' => \Str::snake($this->argument('role'))]);
        return Command::SUCCESS;
    }
}
