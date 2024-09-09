<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use App\Models\Applicant_form;

class NotificationController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $applicantProfile = Applicant_profile::where('user_id', $userId)->first();
        $notifications = Notification::where('user_id', auth()->user()->id)->get();
        $applicantProfiles = Applicant_form::where('user_id', $userId)->first();
        return view('applicant-notification', compact('applicantProfile', 'notifications', 'applicantProfiles'));
    }
    
    public function markAsRead(Notification $notification)
    {
        $notification->read_at = now();
        $notification->save();

        return redirect()->back();
    }
}
