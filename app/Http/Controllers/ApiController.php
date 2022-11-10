<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ApiController extends Controller
{
    function roles()
    {
        $roles = Role::whereNot('name', 'admin')->get();
        return response()->json($roles);
    }

    function permissions($roleId)
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
