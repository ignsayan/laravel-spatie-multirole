<?php

namespace App\Http\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    function execute(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $data['uuid'] = str()->uuid();
        return User::create($data)->assignRole($data['role']);
    }
}
