<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant_form;
use App\Models\Applicant_profile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Reviewrating;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\DemoMail1;
use App\Mail\DemoMail2;
use Mail;
use Illuminate\Foundation\Auth\RegistersUsers;


class FrontendController extends Controller
{

    use RegistersUsers;

    // protected $redirectTo = '/home';


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $green = Applicant_form::where('target_sector', 'green economy')->count();
        $retail = Applicant_form::where('target_sector', 'retail')->count();
        $manufacturing = Applicant_form::where('target_sector', 'manufacturing/production')->count();
        $usersCount = User::count();
        $applicantCount = User::where('role_as', '0')->count();
        $reviwerCount = User::where('role_as', '4')->count();
        $judgesCount = User::where('role_as', '3')->count();
        $sexMaleCount = Applicant_profile::where('sex', 'Male')->count();
        $sexFemaleCount = Applicant_profile::where('sex', 'Female')->count();
        $ageOneCount = Applicant_profile::where('age', '18-25')->count();
        $ageTwoCount = Applicant_profile::where('age', '26-35')->count();
        $ageThreeCount = Applicant_profile::where('age', '36-45')->count();
        $ageFourCount = Applicant_profile::where('age', '46-55')->count();
        $ageFiveCount = Applicant_profile::where('age', '55+')->count();
        $review = new Reviewrating();
        $review = Reviewrating::orderBy("average", "desc")->where('nu', '1')->take(5)->get();
        $product = Applicant_form::where('status', 'Approved')->count();
        $southeast = Applicant_form::where('country_of_operation', 'south-east')->count();
        $southsouth = Applicant_form::where('country_of_operation', 'south-south')->count();
        $northcentral = Applicant_form::where('country_of_operation', 'north-central')->count();
        $northwest = Applicant_form::where('country_of_operation', 'north-west')->count();
        $northeast = Applicant_form::where('country_of_operation', 'north-east')->count();
        $southwest = Applicant_form::where('country_of_operation', 'south-west')->count();
        $submitted = Applicant_form::count();


        return view('admin.index', [
            'green' => $green,
            'retail' => $retail,
            'manufacturing' => $manufacturing,
            'usersCount' => $usersCount,
            'applicantCount' => $applicantCount,
            'reviwerCount' => $reviwerCount,
            'judgesCount' => $judgesCount,
            'sexMaleCount' => $sexMaleCount,
            'sexFemaleCount' => $sexFemaleCount,
            'ageOneCount' => $ageOneCount,
            'ageTwoCount' => $ageTwoCount,
            'ageThreeCount' => $ageThreeCount,
            'ageFourCount' => $ageFourCount,
            'ageFiveCount' => $ageFiveCount,
            'review' =>  $review,
            'product' => $product,
            'southeast' => $southeast,
            'southsouth' => $southsouth,
            'northcentral' => $northcentral,
            'northwest' => $northwest,
            'northeast' => $northeast,
            'southwest' => $southwest,
            'submitted' => $submitted
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //   public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    //     protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required', 'string', 'max:255',
    //         'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
    //         'password' => 'required', 'string', 'min:8', 'confirmed',
    //         'code'=> 'required',
    //     ]);
    // }

    public function register2(Request $request)
    {
        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required|email|unique:users,email|max:225,string',
            'password' => 'required', 'string', 'min:8', 'confirmed',
            // 'code'=> 'required',
            'role_as' => 'required',
        ]);




        $bnbsend = new User();
        $bnbsend->name = $request->name;
        $bnbsend->email = $request->email;
        $bnbsend->role_as = $request->role_as;
        $bnbsend->password =  Hash::make($request->password);
        // $bnbsend->code = $request->code;
        $bnbsend->save();

        if ($bnbsend->role_as == 4) {
            $mailData2 = [
                'title' => 'LOGIN DETAILS',
                'name' => $bnbsend->name,
                'email' => $bnbsend->email,
                // 'role_as' =>$bnbsend->role_as,
                'role_as' => 'REVIEWER',
                'password' => $request->password,
            ];

            $mailData1 = [
                'title' => 'LOGIN DETAILS',
                'name' => $bnbsend->name,
                'email' => $bnbsend->email,
                // 'role_as' =>$bnbsend->role_as,
                'role_as' => 'REVIEWER',
                'password' => $request->password,
            ];
        } else {

            $mailData2 = [
                'title' => 'LOGIN DETAILS',
                'name' => $bnbsend->name,
                'email' => $bnbsend->email,
                // 'role_as' =>$bnbsend->role_as,
                'role_as' => 'JURY',
                'password' => $request->password,
            ];


            $mailData1 = [
                'title' => 'LOGIN DETAILS',
                'name' => $bnbsend->name,
                'email' => $bnbsend->email,
                // 'role_as' =>$bnbsend->role_as,
                'role_as' => 'JURY',
                'password' => $request->password,
            ];
        };




        Mail::to('kodexbuild@gmail.com')->send(new DemoMail1($mailData1));
        //  Mail::to('umehonyedika2000@gmail.com')->send(new DemoMail1($mailData1));
        Mail::to($mailData2['email'])->send(new DemoMail2($mailData2));

        return redirect()->back()->with('message', 'DONE');
    }

    // public function register2()
    // {
    //     //
    // }

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
    public function update(Request $request, $id)
    {
        //
    }

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
}
