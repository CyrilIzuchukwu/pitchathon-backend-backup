<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use App\Models\Applicant_form;

class ReviewController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $applicantProfile = Applicant_profile::where('user_id', $userId)->first();
        $applicantProfiles = Applicant_form::where('user_id', $userId)->first();
        return view('applicant-review', compact('applicantProfile', 'applicantProfiles'));
    }
}
