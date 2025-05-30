@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registered Users') }}</div>
                <div class="card-body">
                    <table class="table table-hover table-borderless">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">User Type</th>
                                <th colspan="2">Perform Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            <small class="ml-2 btn btn-sm btn-warning">{{ ucfirst($role->name) }}</small>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.edit-user', ['uuid' => $user->uuid]) }}"
                                            class="btn btn-dark">Edit</a>
                                        &nbsp;<button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
