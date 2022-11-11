@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Products') }}</div>
                <div class="card-body">
                    @if (Auth::check() && Auth::user()->hasRole(ROLE_ADMIN))
                        <div class="card-title">
                            <a href="javascript:void()" class="btn btn-dark">Add New Product</a>
                        </div>
                    @endif
                    <table class="table table-hover table-borderless">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price (INR)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Msi GeForce RTX 3060Ti Gaming X LHR </td>
                                <td>MSI</td>
                                <td>Graphics Card</td>
                                <td>nvidia 30 series based desktop gpu</td>
                                <td>42,000</td>
                                <td>
                                    @if (Auth::check() && Auth::user()->hasRole(ROLE_ADMIN))
                                        <a href="javascript:void()" class="btn btn-dark">Edit</a>
                                        &nbsp;<button class="btn btn-danger">Delete</button>
                                    @elseif (Auth::check() && Auth::user()->hasRole(ROLE_MANAGER))
                                        <a href="javascript:void()" class="btn btn-dark">Manage Item</a>
                                    @else
                                        <a href="javascript:void()" class="btn btn-dark">Place Order</a>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
