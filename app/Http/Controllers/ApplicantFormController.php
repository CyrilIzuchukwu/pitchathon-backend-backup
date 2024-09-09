<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Applicant_form;
use App\Models\Applicant_profile;
use App\Jobs\ProcessVideo;
use Dompdf\Dompdf;
use Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Storage;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Rules\MaxWords;


class ApplicantFormController extends Controller
{
    public function create()
    {
        $userId = auth()->id();
        $user = Applicant_form::where('user_id', $userId)->first();
        $applicantProfile = Applicant_profile::where('user_id', $userId)->first();
        $applicantProfiles = Applicant_form::where('user_id', $userId)->first();
        return view('apply-form', compact('applicantProfile', 'user', 'applicantProfiles'));


        // try{
        // $user = Applicant_profile::where('user_id', Auth::id())->first();
        // if ($user->id == $user->id) {
        //  $userId = auth()->id();
        // $user = Applicant_form::where('user_id', $userId)->first();
        // $applicantProfile = Applicant_profile::where('user_id', $userId)->first();
        // return view('apply-form', compact('applicantProfile','user'));
        // }
        // }catch(Exception $e){
        //     return redirect('applicant-profile')->with('error', 'Please insert your profile before any other thing ');
        // }



    }




























    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->file('logo'));

        $formFields = $request->validate([
            'name_of_business' => 'max:255',
            'name_of_product' => 'required|max:255',
            'country_of_registration' => 'required|max:255',
            'country_of_operation' => 'required|max:255',
            'founder_name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => ['required', 'email', Rule::unique('applicant_forms', 'email')],
            'phone' => 'required|max:255',
            'facebook' => 'max:255',
            'twitter' => 'max:255',
            'linkedin' => 'max:255',
            'description' => ['required', new MaxWords(500)],
            'target_sector' => 'required|max:255',
            'impact_on_msme' => ['required', new MaxWords(500)],
            'time_in_operation' => 'required|max:500',
            'total_revenue' => 'required|max:255',
            'mrr' => 'required|max:500',
            'team_size_full' => 'required|max:255',
            'team_size_part' => 'required|max:255',
            'video_pitch' => 'required|max:255',
            'pitch_deck' => 'required|file|max:50000|mimetypes:application/pdf',
            'solution_url' => 'required|max:255',
            'solution_url_confirm' => 'max:255',
            'participation_reason' => ['required', new MaxWords(250)],
            'hear_about_techmybiz' => 'required|max:255',
            'otherOption' => 'max:255',
            // I NEED TO ADD A STATUS FIELD!!!!!! IT WILL BE IMPORTANT FOR REVIEWERS
        ]);

        if ($request->hasFile('pitch_deck')) {
            $formFields['pitch_deck'] = $request->file('pitch_deck')->store('pitch_deck', 'public');
        }

        //  $video = $request->file('video_pitch');
        //  $path = $video->store('videos', 'public');
        //  ProcessVideo::dispatch($path);

        // Get the selected checkboxes from the form
        // $selectedOptions = $request->input('mrr');

        // Convert the selected options to a string
        // $optionsString = implode(',', $selectedOptions);

        // $formFields['mrr'] = $optionsString;

        //Assigning the user_id to the currnet user
        $formFields['user_id'] = auth()->id();

        // save the form data to the session


        Applicant_form::create($formFields);

        $data = [
            'subject' => 'Submission Successful',
            'founder_name' => $formFields['founder_name'],
            'email' =>  $formFields['email'],
        ];

        // $datas = [
        //  'pdf' =>  $formFields['pitch_deck'] = $request->file('pitch_deck')->save(storage_path('app/public/pdf/' .time() . 'pdf'))
        // ];


        $mailData = [
            'title' => 'Applicant_form',
            'name_of_business' => $formFields['name_of_business'],
            'founder_name' => $formFields['founder_name'],
            'address' => $formFields['address'],
            'country_of_registration' => $formFields['country_of_registration'],
            'email' => $formFields['email'],
            'country_of_operation' => $formFields['country_of_operation'],
            'phone' => $formFields['phone'],
            'facebook' => $formFields['facebook'],
            'twitter' => $formFields['twitter'],
            'linkedin' => $formFields['linkedin'],
            'description' => $formFields['description'],
            'otherOption' => $formFields['otherOption'],
            'target_sector' => $formFields['target_sector'],
            'impact_on_msme' => $formFields['impact_on_msme'],
            'time_in_operation' => $formFields['time_in_operation'],
            'mrr' => $formFields['mrr'],
            'team_size_full' => $formFields['team_size_full'],
            'team_size_part' => $formFields['team_size_part'],
            'solution_url' => $formFields['solution_url'],
            'participation_reason' => $formFields['participation_reason'],
            'hear_about_techmybiz' => $formFields['hear_about_techmybiz'],
            'total_revenue' => $formFields['total_revenue'],
            'solution_url_confirm' => $formFields['solution_url_confirm'],
            'pitch_deck' => $formFields['pitch_deck'],
        ];

        $pdf = new Dompdf();
        $pdf->loadHTML(view('MAILS', compact('mailData')));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $output = $pdf->output();

        Mail::send('MAIL', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });

        Mail::to('kodexbulild@gmail.com')->send(new DemoMail($mailData, $output));
        // Mail::to('umehonyedika2000@gmail.com')->send(new DemoMail($mailData,$output,$datas['pdf']));

        return redirect('/home')->with('message', 'successful');
    }
}
