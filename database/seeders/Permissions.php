<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            Permission::create(['name' => PERMISSION_CREATE]);
            Permission::create(['name' => PERMISSION_UPDATE]);
            Permission::create(['name' => PERMISSION_DELETE]);
            Permission::create(['name' => PERMISSION_DISPLAY]);
        });
    }
}
