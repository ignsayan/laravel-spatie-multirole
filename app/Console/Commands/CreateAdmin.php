<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates Super Admin';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::create([

            'uuid' => \Str::uuid(),
            'name'  => $this->ask('Enter Username'),
            'email' => $this->ask('Enter Email ID'),
            'password' => \Hash::make($this->secret('Enter Password'))
        ]);

        $user->assignRole(ROLE_ADMIN);

        Role::findByName(ROLE_ADMIN)->givePermissionTo(Permission::all());

        $this->info('Admin Created Successfully !!');
    }
}
