<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated()
    {
        if (Auth::user()->role_as == '1') //1 = Admin Login
        {
            // return redirect('admin/dashboard')->with('message','WELCOME TO YOUR DASHBOARD');
            return redirect('admin/dashboard')->with('message', 'WELCOME TO YOUR DASHBOARD');
        } elseif (Auth::user()->role_as == '2') // sub admin
        {
            return redirect('Sub_admin/dashboard')->with('message', 'WELCOME TO YOUR Sub_DASHBOARD');
        } elseif (Auth::user()->role_as == '3') // sub admin
        {
            return redirect('Jury/dashboard')->with('message', 'WELCOME TO YOUR Jury_DASHBOARD');
        } elseif (Auth::user()->role_as == '4') // sub admin
        {
            return redirect('Review/dashboard')->with('message', 'WELCOME TO YOUR Review_DASHBOARD');
        } elseif (Auth::user()->role_as == '0') // Normal or Default User Login
        {
            return redirect('/home')->with('message', 'Logged in successfully');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
