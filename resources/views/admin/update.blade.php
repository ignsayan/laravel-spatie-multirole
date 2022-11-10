@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update User') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.edit-user', ['uuid' => $user->uuid]) }}">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ $user->name }}" required autocomplete="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ $user->email }}" required autocomplete="email">
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <label for="role"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Change Role') }}</label>

                                <div class="col-md-6">
                                    <select name="role" class="form-control" required>
                                        @foreach ($user->roles as $currentrole)
                                            @foreach ($roles as $role)
                                                <option value="{{ $role }}"
                                                    @if ($role == $currentrole->name) {{ 'selected' }} @endif>
                                                    {{ ucfirst($role) }}
                                                </option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-dark">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
