<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Code;
// use App\Rules\ValidCode;

class NewRegistrationController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    
    public function register(Request $request)
    {
        dd($request->all());
        // $formFields = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'role' => 'required|integer|in:0,3,4',
        //     'code' => ['required', new ValidCode],
        //     'password' => 'required|string|min:8|confirmed',
        // ]);
        
        // $formFields['password'] = bcrypt($formFields['password']);
         
        // Check if the entered code matches what is in the database
        // $code = Code::where('code', $request->input('code'))->where('is_used', false)->first();
        // if (!$code) {
        //     return redirect()->back()->withErrors(['code' => 'Invalid code'])->withInput();
        // }
        
       
        // $user = User::create($formFields);
        // auth()->login($user);
    
       
    
        // $code->is_used = true;
        //     $code->save();
        
        // return redirect('/login')->with('message', 'Account Created and Logged in successfully');
    
    
        // Create a new user with the validated data
        // $user = User::create([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'password' => bcrypt($request->input('password')),
        //     'role_as' => $request->input('role'),
        //     'code' => $request->input('code'),
        // ]);
    
        // Mark the code as used
        
    }

}
