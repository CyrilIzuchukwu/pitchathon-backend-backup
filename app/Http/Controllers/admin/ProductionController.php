<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use App\Models\Applicant_form;
use App\Models\Reviewrating;
use App\Models\Juryratings;
class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $btc = new Applicant_form();
        $userId = auth()->id();
        $user = Applicant_profile::where('user_id', $userId)->first();
        $btc= Applicant_form::orderBy("id", "desc")->where('target_sector', 'manufacturing/production')->paginate(10);
        return view('admin.production',compact('btc','user'));
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
     
          $btc = Applicant_form::findorFail($id);
            $review = Reviewrating::where("userid",$btc->user_id)->get();
      
      $btcss = Juryratings::where("userid",$btc->user_id)->get();
        return view('admin.production.edit',compact('btc','btcss','review'));
        
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
