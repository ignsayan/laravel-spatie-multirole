<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class SetPermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:permission {permission?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates Permission';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->argument('permission') ? Permission::create(['name' => $this->argument('permission')])
            :
            DB::transaction(function () {
                Permission::create(['name' => 'create']);
                Permission::create(['name' => 'update']);
                Permission::create(['name' => 'delete']);
                Permission::create(['name' => 'display']);
            });

        return Command::SUCCESS;
    }
}
