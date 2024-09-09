<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Applicant_form;
use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Reviewrating;

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
        $userId = auth()->id();
        $application_form = Applicant_form::all();
        $applicantProfile = Applicant_profile::where('user_id', $userId)->first();
        $applicantProfiles = Applicant_form::where('user_id', $userId)->first();
        $orders = Reviewrating::where("userid",  Auth::id())->first();
        $or = Reviewrating::where("userid",  Auth::id())->get();
        // $orderss = count($orders);
        // count($project->tasks);
        // if ($orders->count() <= 0) {
        //         // $rating_value1 = $rating_sum1 / $ratings->count();

        //          $orderss = "0";
        //         } else {
        //             $orderss = $orders->count();
        //         }


        return view('home', compact('applicantProfile','applicantProfiles','orders','or','application_form'));
    }
        public function settings()
    {
        $userId = auth()->id();
        $applicantProfile = Applicant_profile::where('user_id', $userId)->first();
        $applicantProfiles = Applicant_form::where('user_id', $userId)->first();
        return view('setting', compact('applicantProfile','applicantProfiles') );
    }




        public function update(Request $request)
    {
           $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect('/login')->with('message', 'Password changed successfully ');
        }else{
            return redirect()->back()->with('error', 'Current password is invalid');
        }
    }



}
