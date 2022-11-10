<?php

namespace App\Http\Actions;

use App\Models\User;

class UpdateUserAction
{
    function execute(array $data, User $user)
    {
        return $user->update($data);
    }
}
