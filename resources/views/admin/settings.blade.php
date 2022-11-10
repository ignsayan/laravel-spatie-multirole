@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Toggle Settings') }}
                    </div>
                    <div class="card-body">
                        @if (session('configured'))
                            <div class="alert alert-success">
                                <strong>{{ session('configured') }}</strong>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.settings') }}" id="permission">
                            @csrf
                            <div id="role-permissions"></div>
                            <div class="card-body text-center">
                                <button type="submit" class="btn btn-dark">Save Configuration</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
