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
        $this->argument('permission')
            ? Permission::create(['name' => $this->argument('permission')])
            : DB::transaction(function () {
                Permission::create(['name' => PERMISSION_CREATE]);
                Permission::create(['name' => PERMISSION_UPDATE]);
                Permission::create(['name' => PERMISSION_DELETE]);
                Permission::create(['name' => PERMISSION_DISPLAY]);
            });

        return Command::SUCCESS;
    }
}
