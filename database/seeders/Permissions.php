<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $permissions = [

            ['name' => PERMISSION_CREATE],
            ['name' => PERMISSION_UPDATE],
            ['name' => PERMISSION_DELETE],
            ['name' => PERMISSION_DISPLAY]
        ];

        Permission::insert($permissions);
    }
}
