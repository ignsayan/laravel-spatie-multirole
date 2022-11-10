@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">{{ __('Dashboard') }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">Create new user</h5>
                        <p class="card-text">New user with specific roles as per requirement</p>
                        <a href="{{ route('admin.create-user') }}">
                            <button type="button" class="btn btn-dark">Create User</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Display users</h5>
                        <p class="card-text">Click here to view all registered users with roles</p>
                        <a href="{{ route('admin.view-users') }}">
                            <button type="button" class="btn btn-dark">View Users</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Set Permissions</h5>
                        <p class="card-text">Select or remove permissions according to roles</p>
                        <a href="{{ route('admin.settings') }}">
                            <button type="button" class="btn btn-dark">Permissions</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
