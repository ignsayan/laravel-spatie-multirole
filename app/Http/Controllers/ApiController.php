<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ApiController extends Controller
{
    function adminRequestRoles()
    {
        $roles = Role::whereNot('name', ROLE_ADMIN)->get();
        return response()->json($roles);
    }

    function adminRequestPermissions($roleId)
    {
        $active = Role::find($roleId);
        $selected = [];

        for ($i = 0; $i < count($active->permissions); $i++) {
            $selected[$i] = $active->permissions[$i]->name;
        }
        $inactive = Permission::whereNotIn('name', $selected)->get();
        return response()->json(['active' => $active, 'inactive' => $inactive]);
    }
}
