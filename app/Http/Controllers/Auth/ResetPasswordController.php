<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    
        protected function redirectTo()
    {
        if(Auth::user()->role_as == '1') //1 = Admin Login
        {
            // return redirect('admin/dashboard')->with('message','WELCOME TO YOUR DASHBOARD');
            return 'admin/dashboard';
        }
        elseif(Auth::user()->role_as == '2')// sub admin
        {
             return redirect('Sub_admin/dashboard')->with('message','WELCOME TO YOUR Sub_DASHBOARD');
        }
                        elseif(Auth::user()->role_as == '3')// sub admin
        {
             return redirect('Jury/dashboard')->with('message','WELCOME TO YOUR Jury_DASHBOARD');
        }
                elseif(Auth::user()->role_as == '4')// sub admin
        {
             return redirect('Review/dashboard')->with('message','WELCOME TO YOUR Review_DASHBOARD');
        }
        elseif(Auth::user()->role_as == '0') // Normal or Default User Login
        {
            return '/home';
        }
    }
}
