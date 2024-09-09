<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // Show the email form
    public function sendEmailForm()
    {
        return view('admin.eMail.send-email-form');
    }

    // Send the email
    public function send_email(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required|string',
            'message' => 'required|string'
        ]);

        $email = $request->input('email');
        $title = $request->input('title');
        $message = $request->input('message');


        $data = [
            'title' => $title,
            'message' => $message
        ];

        // Send the email
        $sent =   Mail::to($email)->send(new SendEmail($data));
        // dd($sent);
        if ($sent) {
            return redirect()->back()->with('message', 'Email sent successfully.');
        } else {
            return redirect()->back()->with('error', 'Email sendiing failed.');
        }
    }
}
