<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->hasRole(ROLE_ADMIN))
        {
            return Redirect::route('admin.dashboard');
        }
        else if(Auth::user()->hasRole(ROLE_CUSTOMER))
        {
            return Redirect::route('customer.dashboard');
        }
        else if(Auth::user()->hasRole(ROLE_MANAGER))
        {
            return Redirect::route('manager.dashboard');
        }
        else return view('default');
    }
}
