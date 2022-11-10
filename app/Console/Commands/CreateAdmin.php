<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
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
        $name = $this->ask('Enter Username');
        $mail = $this->ask('Enter Email ID');
        $password = Hash::make($this->secret('Enter Password'));

        User::create([
            'uuid' => str()->uuid(),
            'name'  => $name,
            'email' => $mail,
            'password' => $password
        ])->assignRole(ROLE_ADMIN);

        $this->info('Admin Created Successfully !!');
    }
}
