<?php

namespace App\Http\Controllers;

use App\Console\Commands\SetPermission;
use App\Http\Actions\CreateUserAction;
use App\Http\Actions\PermissionAction;
use App\Http\Actions\UpdateUserAction;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::whereNot('name', 'admin')->pluck('name');
        return view('admin.register', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request, CreateUserAction $action)
    {
        $data = $request->validated();
        $action->execute($data);
        return Redirect::route('admin.view-users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->whereNot('name', 'admin');
        })->get();
        return view('admin.display', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $data = User::where('uuid', $uuid)->firstOrFail();
        $roles = Role::whereNot('name', 'admin')->pluck('name');
        return view('admin.update', ['user' => $data, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $uuid, UpdateUserAction $action)
    {
        $data = $request->validated();
        $user = User::where('uuid', $uuid)->firstOrFail();
        $action->execute($data, $user);
        return Redirect::route('admin.view-users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function configure(Request $request, PermissionAction $action)
    {
        $roleId = $request->role;
        $permissions = $request->permission ? $request->permission : [];
        $action->execute($roleId, $permissions);
        return Redirect::back()->with('configured', 'Permissions Updated !!');
    }
}
