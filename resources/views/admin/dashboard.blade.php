@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add new user</h5>
                        <p class="card-text">New user with specific roles as per requirement</p>
                        <a href="{{ route('admin.create-user') }}">
                            <button type="button" class="btn btn-dark">Create User</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <p></p>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Display users</h5>
                        <p class="card-text">Click here to view all registered users with roles</p>
                        <a href="{{ route('admin.view-users') }}">
                            <button type="button" class="btn btn-dark">View Users</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update settings</h5>
                        <p class="card-text">Select or remove permissions based on user roles</p>
                        <a href="{{ route('admin.settings') }}">
                            <button type="button" class="btn btn-dark">Configuration</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
