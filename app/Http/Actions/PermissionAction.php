<?php

namespace App\Http\Actions;

use Spatie\Permission\Models\Role;

class PermissionAction
{
    function execute($roleId, array $permissions)
    {
        $role = Role::find($roleId);
        return $role->syncPermissions($permissions);
    }
}
