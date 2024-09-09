<?php

namespace App\Http\Controllers\review;
use App\Models\Applicant_form;
use App\Models\Reviewrating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $btc = new Applicant_form();
        $userId = auth()->id();
        $user = Applicant_profile::where('user_id', $userId)->first();
         $btc= Applicant_form::orderBy("id", "desc")->when($request->filter !=null, function ($q) use ($request){
             return $q->where('target_sector', $request->filter);
         })->paginate(10);

        return view('admin.review.index',compact('btc','user'));
    }
    public function index1()
    {
        $btc = new Applicant_form();
        $userId = auth()->id();
        $user = Applicant_profile::where('user_id', $userId)->first();
        $notifications = Notification::where('user_id', auth()->user()->id)->get();
        return view('admin.review.Notifications',compact('user', 'notifications'));
    }
       public function index2($id)
    {
        //  if ($request->amount <= 0.00004) {
        // return back()->with('error', 'Your requested amount is smaller than 0.00005.');
        // }

         $userId = auth()->id();
        $user = Applicant_profile::where('user_id', $userId)->first();

         $btc = Applicant_form::find($id);
          $btcss = Reviewrating::where("userid",$btc->user_id)->first();
            $btcsend = Applicant_form::find($id);
            // $reviewCounts = Reviewrating::where("userid",$btc->user_id)->count();
            // if($reviewCounts == 2)
            // {
            //     return redirect()->back()->with('error', 'This Applicant has been reviewed twice!');
            // }
            $reviewCount = Reviewrating::where("userid",$btc->user_id)->where('reviewerid',auth()->id())->count();
            if($reviewCount == 1){



            if($btcsend){
                $ratings = Reviewrating::where("userid",$btc->user_id)->get();
                $rating_sum1 = Reviewrating::where("userid",$btc->user_id)->sum('rate1');
                 $rating_sum2 = Reviewrating::where("userid",$btc->user_id)->sum('rate2');
                  $rating_sum3 = Reviewrating::where("userid",$btc->user_id)->sum('rate3');
                   $rating_sum4 = Reviewrating::where("userid",$btc->user_id)->sum('rate4');
                    $rating_sum5 = Reviewrating::where("userid",$btc->user_id)->sum('rate5');
                     $rating_sum6 = Reviewrating::where("userid",$btc->user_id)->sum('rate6');
                $user_rating = Reviewrating::where("userid",$btc->user_id)->where('userid', Auth::id())->first();

                // if ($ratings->count() == 0){

                // }
                // for rate1
                if ($ratings->count() > 0) {
                $rating_value1 = $rating_sum1 / $ratings->count();
                } else {
                    $rating_value1 = "0";
                }


                 // for rate2
                if ($ratings->count() > 0) {
                $rating_value2 = $rating_sum2 / $ratings->count();
                } else {
                    $rating_value2 = 0;
                }


                 // for rate3
                  if ($ratings->count() > 0) {
                $rating_value3 = $rating_sum3 / $ratings->count();
                } else {
                    $rating_value3 = 0;
                }


                 // for rate4
                if ($ratings->count() > 0) {
                $rating_value4 = $rating_sum4 / $ratings->count();
                } else {
                    $rating_value4 = 0;
                }

                  // for rate5
                if ($ratings->count() > 0) {
                $rating_value5 = $rating_sum5 / $ratings->count();
                } else {
                    $rating_value5 = 0;
                }

                   // for rate6
                if ($ratings->count() > 0) {
                $rating_value6 = $rating_sum6 / $ratings->count();
                } else {
                    $rating_value6 = 0;
                }
            }


          $b = Reviewrating::where("userid",$btc->user_id)->first();
          if ($ratings->count() > 0) {
          $b1 = ($rating_sum1 + $rating_sum2 + $rating_sum3 + $rating_sum4 + $rating_sum5 + $rating_sum6)  /  $ratings->count() ;
        //   $bb = $b1 /  $ratings->count() ;
          $b->average = $b1;
          } else {
                    $b = 0;
                }
                $b->nu = 1;
          $b->update();

        return view('admin.review.review',compact('btc','btcss','rating_value1','rating_value2','rating_value3','rating_value4','rating_value5','rating_value6','user'));
            }else{
                //reviewer can review candidate
                        return view('admin.review.review',compact('btc','user'));

            }
    }

    public function index3(Request $request,$id)
    {

        $request->validate([
            'userid' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'description3' => 'required',
            'description4' => 'required',
            'description5' => 'required',
            'description6' => 'required',
            'score1' => 'required',
            'score2' => 'required',
            'score3' => 'required',
            'score4' => 'required',
            'score5' => 'required',
             'score6' => 'required',
             'summary' => 'required',
        ]);
        $user = auth()->user();

        $btc = Reviewrating::where('userid',$user->id)->count();


        if($btc >  0){
        $review = Reviewrating::where('userid',$user->id)->first();
        $review->userid = $request->userid;
        $review->description1 = $request->description1;
         $review->description2 = $request->description2;
          $review->description3 = $request->description3;
           $review->description4 = $request->description4;
            $review->description5 = $request->description5;
             $review->description6 = $request->description6;
             $review->rate1 = $request->score1;
              $review->rate2 = $request->score2;
              $review->rate3 = $request->score3;
              $review->rate4 = $request->score4;
              $review->rate5 = $request->score5;
              $review->rate6 = $request->score6;
              $review->summary = $request->summary;
        $review->update();
        return back()->with('message', 'Updated');
        }else {

        $btcsend = Applicant_form::where('id',$id)->first();
        $btcsend->checkout += 1;
        $btcsend->update();

        $review = new Reviewrating();
        $review->reviewerid = Auth::id();
        $review->userid = $request->userid;
        $review->description1 = $request->description1;
         $review->description2 = $request->description2;
          $review->description3 = $request->description3;
           $review->description4 = $request->description4;
            $review->description5 = $request->description5;
             $review->description6 = $request->description6;
              $review->rate1 = $request->score1;
              $review->rate2 = $request->score2;
              $review->rate3 = $request->score3;
              $review->rate4 = $request->score4;
              $review->rate5 = $request->score5;
              $review->rate6 = $request->score6;
              $review->summary = $request->summary;
              $review->total = $request->score1 + $request->score2 + $request->score3 + $request->score4 + $request->score5 +$request->score6;
              $review->target_sector = $request->sector;
              $review->business = $request->business;
              $review->status = 1;
              $review->country = $request->country;
        $review->save();
           return back()->with('message', 'Thanks for rating this Applicant');
        }

       return back()->with('error', 'Please check your input form');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function settings(){
        return view('admin.review.setting');
    }
    // public function edit()
    // {
    //     try{
    //     $user = Applicant_profile::where('user_id', Auth::id())->first();
    //     if ($user->id == $user->id) {
    //     $user = Applicant_profile::where('user_id', Auth::id())->first();
    //     return view('admin.review.edit', compact('user'));
    //     }
    //     }catch(Exception $e){
    //         return redirect()->back()->with('error', 'Please insert your profile before editing ');
    //     }
    // }

//     public function store(Request $request){
//         // dd($request->all());
//         // dd($request->file('logo'));

//         $formFields = $request->validate([
//             'name' => 'required|max:255',
//             'address' => 'required|max:255',
//             'email' => 'required|max:255',
//             'phone' => 'required|max:255',
//             'facebook' => 'nullable|max:255',
//             'twitter' => 'nullable|max:255',
//             'linkedin' => 'nullable|max:255',
//             'sex' => 'required|max:255',
//             'profile_image' => 'required|max:255',
//             'age' => 'required|max:255',
//             'role' => 'required|max:255',
//             'organization' => 'required|max:255',
//             'country' => 'required|max:255',
//             'education' => 'required|max:500',
//             'profession' => 'required|max:255',
//             'question' => 'required|max:500',
//             'about_yourself' => 'required|max:100',
//             'about_business' => 'required|max:100',
//             'target_sector'=> 'required',
//         ]);

//          $uploadPath = 'uploads/profile_image/';
//         if ($request->hasFile('profile_image')) {
//             $file = $request->file('profile_image');
//             $ext = $file->getClientOriginalExtension();
//             $filename = time() . '.' . $ext;
//             $file->move('uploads/profile_image/', $filename);
//             $formFields['profile_image'] =  $uploadPath.$filename;
//         }
//         //Assigning the user_id to the currnet user
//         $formFields['user_id'] = auth()->id();

//         Applicant_profile::create($formFields);

//         // return redirect('/home')->with('message', 'successful');
//          return redirect()->back()->with('message', 'successful');
//   }

//       public function update1(Request $request){
//         $formFields = Applicant_profile::where('user_id', Auth::id())->first();

//          $request->validate([
//             'name' => 'required|max:255',
//             'address' => 'required|max:255',
//             'email' => 'required|max:255',
//             'phone' => 'required|max:255',
//             'facebook' => 'nullable|max:255',
//             'twitter' => 'nullable|max:255',
//             'linkedin' => 'nullable|max:255',
//             'sex' => 'required|max:255',
//             'age' => 'required|max:255',
//             'role' => 'required|max:255',
//             'organization' => 'required|max:255',
//             'country' => 'required|max:255',
//             'education' => 'required|max:500',
//             'profession' => 'required|max:255',
//             'question' => 'required|max:500',
//             'about_yourself' => 'required|max:100',
//             'about_business' => 'required|max:100',
//             'target_sector'=> 'required',
//         ]);

//         $formFields->name = $request->name;
//         $formFields->address = $request->address;
//         $formFields->email = $request->email;
//         $formFields->phone = $request->phone;
//         $formFields->facebook = $request->facebook;
//         $formFields->twitter = $request->twitter;
//         $formFields->linkedin = $request->linkedin;
//         $formFields->sex = $request->sex;
//         // $formFields->profile_image = $request->profile_image;
//         $formFields->age = $request->age;
//         $formFields->role = $request->role;
//         $formFields->organization = $request->organization;
//         $formFields->country = $request->country;
//         $formFields->education = $request->education;
//         $formFields->profession = $request->profession;
//         $formFields->question = $request->question;
//         $formFields->about_yourself = $request->about_yourself;
//         $formFields->about_business = $request->about_business;
//         $formFields->target_sector = $request->target_sector;
//         if ($request->hasFile('profile_image')) {
//             $uploadPath = 'uploads/profile_image/';
//             $path = 'uploads/profile_image/' . $formFields->profile_image;
//             if (File::exists($path)) {
//                 File::delete($path);
//             }
//             $file = $request->file('profile_image');
//             $ext = $file->getClientOriginalExtension();
//             $filename = time() . '.' . $ext;
//             $file->move('uploads/profile_image/', $filename);
//             $formFields->profile_image = $uploadPath . $filename;
//         }
//         $formFields->update();
//         return redirect()->back()->with('message', 'successful');
//   }


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
            $user->password_changed_at = now();
            $user->save();
            Auth::logout();
            return redirect('/login')->with('message', 'Password changed successfully ');
        }else{
            return redirect()->back()->with('error', 'Current password is invalid');
        }
    }









}
