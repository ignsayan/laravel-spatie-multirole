<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [

            ['name' => ROLE_ADMIN],
            ['name' => ROLE_CUSTOMER],
            ['name' => ROLE_MANAGER]
        ];

        Role::insert($roles);
    }
}
