<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use App\Models\Applicant_form;
use App\Models\Reviewrating;
use App\Models\Juryratings;

class ApplicantController extends Controller
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

        // $btc= Applicant_form::orderBy("id", "desc")->paginate(10);
        // $user = Applicant_profile::where('user_id', $btc)->get();



        $btc = Applicant_form::orderBy("id", "desc")->when($request->filter != null, function ($q) use ($request) {
            return $q->where('target_sector', $request->filter);
        })->paginate(10)->withQueryString();


        return view('admin.applicant', compact('btc'));
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
        $review = Reviewrating::where("userid", $btc->user_id)->get();

        $btcss = Juryratings::where("userid", $btc->user_id)->get();

        return view('admin.applicant.edit', compact('btc', 'review', 'btcss'));
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
