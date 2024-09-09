<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\Applicant_profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Rules\MaxWords;
use App\Models\Applicant_form;


class ApplicantProfileFormController extends Controller
{
      public function index()
    {
        $userId = auth()->id();
        $user = Applicant_profile::where('user_id', $userId)->first();
        $applicantProfiles = Applicant_form::where('user_id', $userId)->first();
        return view('applicant-profile', compact('user', 'applicantProfiles'));
    }

    public function create_profile(){
        return view('profile-form');
    }
    public function edit()
    {
        try{
        $user = Applicant_profile::where('user_id', Auth::id())->first();
        if ($user->id == $user->id) {
        $user = Applicant_profile::where('user_id', Auth::id())->first();
        return view('applicant-profile-edit', compact('user'));
        }
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Please insert your profile before editing ');
        }
    }

    public function store(Request $request){
        // dd($request->all());
        // dd($request->file('logo'));

        $formFields = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'facebook' => 'nullable|max:255',
            'twitter' => 'nullable|max:255',
            'linkedin' => 'nullable|max:255',
            'sex' => 'required|max:255',
            'profile_image' => 'required|max:255',
            'age' => 'required|max:255',
            'role' => 'required|max:255',
            'organization' => 'required|max:255',
            'country' => 'required|max:255',
            'education' => 'required|max:500',
            'profession' => 'required|max:255',
            'question' => 'required|max:500',
            'about_yourself' => ['required', new MaxWords(100)],
            'about_business' => ['required', new MaxWords(100)],
            'target_sector'=> 'required',
        ]);

         $uploadPath = 'uploads/profile_image/';
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/profile_image/', $filename);
            $formFields['profile_image'] =  $uploadPath.$filename;
        }
        //Assigning the user_id to the currnet user
        $formFields['user_id'] = auth()->id();

        Applicant_profile::create($formFields);

        return redirect('/home')->with('message', 'successful');
   }

       public function update(Request $request){
        
        $formFields = Applicant_profile::where('user_id', Auth::id())->first();

         $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'facebook' => 'nullable|max:255',
            'twitter' => 'nullable|max:255',
            'linkedin' => 'nullable|max:255',
            'sex' => 'required|max:255',
            'age' => 'required|max:255',
            'role' => 'required|max:255',
            'organization' => 'required|max:255',
            'country' => 'required|max:255',
            'education' => 'required|max:500',
            'profession' => 'required|max:255',
            'question' => 'required|max:500',
            'about_yourself' => ['required', new MaxWords(100)],
            'about_business' => ['required', new MaxWords(100)],
            'target_sector'=> 'required',
        ]);

        $formFields->name = $request->name;
        $formFields->address = $request->address;
        $formFields->email = $request->email;
        $formFields->phone = $request->phone;
        $formFields->facebook = $request->facebook;
        $formFields->twitter = $request->twitter;
        $formFields->linkedin = $request->linkedin;
        $formFields->sex = $request->sex;
        // $formFields->profile_image = $request->profile_image;
        $formFields->age = $request->age;
        $formFields->role = $request->role;
        $formFields->organization = $request->organization;
        $formFields->country = $request->country;
        $formFields->education = $request->education;
        $formFields->profession = $request->profession;
        $formFields->question = $request->question;
        $formFields->about_yourself = $request->about_yourself;
        $formFields->about_business = $request->about_business;
        $formFields->target_sector = $request->target_sector;
        if ($request->hasFile('profile_image')) {
            $uploadPath = 'uploads/profile_image/';
            $path = 'uploads/profile_image/' . $formFields->profile_image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('profile_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/profile_image/', $filename);
            $formFields->profile_image = $uploadPath . $filename;
        }
        $formFields->update();
        return redirect('/home')->with('message', 'updated successfully');
   }

}
