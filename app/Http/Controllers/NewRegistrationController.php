<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Code;
use App\Rules\ValidCode;

class NewRegistrationController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:Reviewer,Judge',
            'code' => ['required', new ValidCode],
        ]);
    
        // Check if the entered code matches what is in the database
        $code = Code::where('code', $request->input('code'))->where('is_used', false)->first();
        if (!$code) {
            return redirect()->back()->withErrors(['code' => 'Invalid code'])->withInput();
        }
    
        // Create a new user with the validated data
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
            'code' => $request->input('code'),
        ]);
    
        // Mark the code as used
        $code->is_used = true;
        $code->save();
    
        // Redirect to the appropriate dashboard based on the user's role
        if ($user->role === '0') {
            return redirect('/home')->with('message','Logged in successfully');
        } elseif ($user->role === '4') {
            return redirect('Review/dashboard')->with('message','WELCOME TO YOUR Review_DASHBOARD');
        } elseif ($user->role === '3') {
            return redirect('Jury/dashboard')->with('message','WELCOME TO YOUR Jury_DASHBOARD');
        }
    }

}
