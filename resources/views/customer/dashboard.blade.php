@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update profile</h5>
                        <p class="card-text">Edit your basic details like name, email etc</p>
                        <a href="{{ route('admin.create-user') }}">
                            <button type="button" class="btn btn-dark">Edit Profile</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Display products</h5>
                        <p class="card-text">Click here to view listed products on our site</p>
                        <a href="{{ route('admin.view-users') }}">
                            <button type="button" class="btn btn-dark">View Products</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
