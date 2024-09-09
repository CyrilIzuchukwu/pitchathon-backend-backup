<?php

namespace App\Http\Controllers\jury;
use App\Models\Juryratings;
use App\Models\Applicant_form;
use App\Models\Juryrating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use Illuminate\Support\Facades\Auth;   
use App\Models\Reviewrating;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class FrontendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index(Request $request)
    {
        $btc = new Applicant_form();
        // $btc = Applicant_form::where('user_id', Auth::id())->paginate(5);s
        $userId = auth()->id();
        $user = Applicant_profile::where('user_id', $userId)->first();
        $btc= Applicant_form::orderBy("id", "desc")->when($request->filter !=null, function ($q) use ($request){
             return $q->where('target_sector', $request->filter);
         })->paginate(10);
        return view('admin.jury.index',compact('btc','user'));
    }
        public function index1()
    {
        return view('admin.jury.Notifications');
    }
    
    
       public function index2($id)
    {
        //  if ($request->amount <= 0.00004) {
        // return back()->with('error', 'Your requested amount is smaller than 0.00005.');
        // }
         $userId = auth()->id();
        $user = Applicant_profile::where('user_id', $userId)->first();
        
         $btc = Applicant_form::find($id);
        $btcss = Juryratings::where("userid",$btc->user_id)->first();
         $review = Reviewrating::where("userid",$btc->user_id)->get();
         $reviews = $review->count();
            $btcsend = Applicant_form::find($id);
            
            $reviewCount = Juryratings::where("userid",$btc->user_id)->where('juryid',auth()->id())->count();
            if($reviewCount == 1){
                

            
            if($btcsend){
                $ratings = Juryratings::where("userid",$btc->user_id)->get();
                $rating_sum1 = Juryratings::where("userid",$btc->user_id)->sum('rate1');
                 $rating_sum2 = Juryratings::where("userid",$btc->user_id)->sum('rate2');
                  $rating_sum3 = Juryratings::where("userid",$btc->user_id)->sum('rate3');
                   $rating_sum4 =Juryratings::where("userid",$btc->user_id)->sum('rate4');
                    $rating_sum5 = Juryratings::where("userid",$btc->user_id)->sum('rate5');
                     $rating_sum6 = Juryratings::where("userid",$btc->user_id)->sum('rate6');
                $user_rating = Juryratings::where("userid",$btc->user_id)->where('userid', Auth::id())->first();
                
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
          
          
          $b = Juryratings::where("userid",$btc->user_id)->first();
          if ($ratings->count() > 0) {
          $b1 = ($rating_sum1 + $rating_sum2 + $rating_sum3 + $rating_sum4 + $rating_sum5 + $rating_sum6)  /  $ratings->count() ;
        //   $bb = $b1 /  $ratings->count() ;
          $b->average = $b1;
          } else {
                    $b = 0;
                }
                
          $b->update();
          
        return view('admin.jury.review',compact('btc','btcss','rating_value1','rating_value2','rating_value3','rating_value4','rating_value5','rating_value6','user','review'));
            }else{
                //reviewer can review candidate
                        return view('admin.jury.review',compact('btc','user','review','reviews'));

            }
    }
    
    public function index3(Request $request,$id)
    {
       
        $request->validate([
            'userid' => 'required',
            // 'description1' => 'required',
            // 'description2' => 'required',
            // 'description3' => 'required',
            // 'description4' => 'required',
            // 'description5' => 'required',
            // 'description6' => 'required',
            'score1' => 'required',
            'score2' => 'required',
            'score3' => 'required',
            'score4' => 'required',
            // 'score5' => 'required',
            //  'score6' => 'required',  
             'summary' => 'required', 
        ]);
        $user = auth()->user();
        
        $btc = Juryratings::where('userid',$user->id)->count();
        

        if($btc >  0){
        $review = Juryratings::where('userid',$user->id)->first();
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
        // $btcsend->status = 'approved';
        $btcsend->checkout1 += 1;
        $btcsend->update();
               
        $review = new Juryratings();
        $review->juryid = Auth::id();
        $review->userid = $request->userid;
        $review->description1 = $request->description1;
         $review->description2 = $request->description2;
          $review->description3 = $request->description3;
           $review->description4 = $request->description4;
            // $review->description5 = $request->description5;
            //  $review->description6 = $request->description6;
              $review->rate1 = $request->score1;
              $review->rate2 = $request->score2;
              $review->rate3 = $request->score3;
              $review->rate4 = $request->score4;
            //   $review->rate5 = $request->score5;
            //   $review->rate6 = $request->score6;
              $review->summary = $request->summary;
              $review->total = $request->score1 + $request->score2 + $request->score3 + $request->score4 ;
              $review->target_sector = $request->sector;
              $review->business = $request->business;
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
    public function store(Request $request)
    {
        //
    }

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
    public function edit($id)
    {
        //
    }

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
        return view('admin.jury.setting');
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
            $user->password_changed_at = now();
            $user->save();
            Auth::logout();
            return redirect('/login')->with('message', 'Password changed successfully ');
        }else{
            return redirect()->back()->with('error', 'Current password is invalid');
        }
    }
}
