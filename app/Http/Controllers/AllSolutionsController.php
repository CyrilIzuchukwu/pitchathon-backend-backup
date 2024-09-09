<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant_form;
use App\Models\Reviewrating;
use App\Models\ui_logo;
use Illuminate\Support\Facades\Auth;
class AllSolutionsController extends Controller
{
     public function home()
    {
        
    $logo_ui = ui_logo::latest()->first();
     return view('welcome',compact('logo_ui'));
    }
    
    public function index()
    {
        return view('all-solutions', [
            'details' => Applicant_form::latest()->paginate(40)
        ]);
    }
    
    public function show(Applicant_form $details){
        return view('solution-details', [
            'one_job' => $details
        ]);
    }
    
    public function shortlisted()
    {
        return view('shortlisted-solutions', [
            'details' => Applicant_form::where('status', 'Approved')->latest()->paginate(40)
        ]);
    }
    
    public function shortlisted_details(Applicant_form $details){
        return view('shortlisted-solution-details', [
            'one_job' => $details
        ]);
    }
    
    public function selected()
    {
        return view('selected-solutions', [
            'details' => Applicant_form::where('status', 'Winner')->latest()->paginate(40)
        ]);
    }
       public function logins1()
    {
                return view('login1');
    }
    
         public function logins2(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'code'=>  ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

        // return redirect('Jury/dashboard')->with('message','WELCOME TO YOUR Jury_DASHBOARD');
                if(Auth::check())
        {
            if(Auth::user()->role_as == '4')
            {
                return redirect('Review/dashboard')->with('message','WELCOME TO YOUR Review_DASHBOARD');
            }
            elseif(Auth::user()->role_as == '3')
            {
                return redirect('Jury/dashboard')->with('message','WELCOME TO YOUR Jury_DASHBOARD');
            }
            else{
            Auth::logout();
            return redirect('/login')->with('message', 'Login as Applicant ');
            }
            
        }
        else
        {
            // return redirect('/')->with('error','Please Login First');
              Auth::logout();
            return redirect('/login')->with('error', 'Login as Applicant ');
        };
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
}
    

