<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\CountDown;
use App\Models\Criteria;
use App\Models\Eligility;
use App\Models\Faq;
use App\Models\FocusSector;
use App\Models\Footer;
use App\Models\journey;
use App\Models\ThemeColor;
use App\Models\Timeline;
use App\Models\Title;
use App\Models\Ui_hero_text;
use App\Models\ui_logo;
use App\Models\top_nav;
use App\Models\UiSetting;
use Illuminate\Http\Request;

class UiController extends Controller
{
    public function uisetting()
    {
        $current_nav_img = top_nav::latest()->first();


        $current_logo = ui_logo::latest()->first();

        
        $current_hero_text = Ui_hero_text::latest()->first();
        $current_journey = journey::latest()->first();
        $current_countdown = CountDown::latest()->first();
        $current_eligibility = Eligility::latest()->first();
        $current_criteria = Criteria::latest()->first();
        $current_timeline = Timeline::latest()->first();
        $current_title = Title::latest()->first();
        $current_footer = Footer::latest()->first();

        return view('admin/frontendSettings.pageSettings', compact('current_logo', 'current_hero_text', 'current_nav_img', 'current_footer', 'current_journey', 'current_timeline', 'current_eligibility', 'current_criteria', 'current_title', 'current_countdown'));
    }


    // THEME COLOR
    public function create_theme_color(Request $request)
    {
        $request->validate([
            'theme_color' => 'required|regex:/^#[a-fA-F0-9]{6}$/',
            'sec_color' => 'required|regex:/^#[a-fA-F0-9]{6}$/'
        ], [
            'theme_color.regex' => 'The theme color must be a valid color code in the format #XXXXXX.',
            'sec_color.regex' => 'The secondary color must be a valid color code in the format #XXXXXX.'
        ]);

        $TC = new ThemeColor();
        $TC->theme_color = $request->theme_color;
        $TC->sec_color = $request->sec_color;

        $TC->save();
        return redirect()->back()->with('message', 'Theme Color Successfully Added');
    }




    // TOP NAV IMAGE
    public function create_top_nav_img(Request $request)
    {

        $request->validate([
            'nav_img' => 'required'
        ]);

        $nav_img = new top_nav();

        $image = $request->nav_img;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->nav_img->move('updates', $imagename);
        $nav_img->top_nav_img = $imagename;

        $nav_img->save();
        return redirect()->back()->with('message', 'Nav Image Successfully Added');
    }

    // LOGO
    public function create_logo(Request $request)
    {
        // validation of inputs
        $request->validate([
            'image' => 'required'
        ]);

        $logo = new ui_logo();

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('updates', $imagename);

        $logo->logo = $imagename;

        $logo->save();
        return redirect()->back()->with('message', 'Logo Successfully Added');
    }



    // FOR HERO TEXT
    public function create_hero_text(Request $request)
    {

        // validation of inputs
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $hero_text = new Ui_hero_text();
        $hero_text->title = $request->title;
        $hero_text->description = $request->description;
        $hero_text->save();
        return redirect()->back()->with('message', 'Settings completed successfully');
    }


    // FOR JOURNEY
    public function create_journey(Request $request)
    {

        // validation of inputs
        $request->validate([
            'title' => 'required',
            'image' => 'required'
        ]);

        $j_data = new journey();
        $j_data->title = $request->title;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('updates', $imagename);

        $j_data->image = $imagename;

        $j_data->save();
        return redirect()->back()->with('message', 'Settings completed successfully');
    }


    // FOR COUNTDOWN
    public function create_countDown(Request $request)
    {
        // Validation of inputs
        $request->validate([
            'countDown' => ['required', 'after_or_equal:' . now()->format('M j, Y H:i:s')]
        ], [
            'countDown.required' => 'Date field is required.',
            // 'countDown.date_format' => 'Date must be in the format "Jul 12, 2023 11:59:59".',
            'countDown.after_or_equal' => 'Date must be a future date.'
        ]);

        $countDown = new CountDown();
        $countDown->countDown = $request->countDown;
        $countDown->save();

        return redirect()->back()->with('message', 'Count-Down successfully updated.');
    }



    // FOR ELIGIBILITY
    public function create_eligibility(Request $request)
    {

        // validation of inputs
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);

        $e_data = new Eligility();
        $e_data->title = $request->title;
        $e_data->description = $request->description;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('updates', $imagename);

        $e_data->image = $imagename;

        $e_data->save();
        return redirect()->back()->with('message', 'Settings completed successfully');
    }


    // FOR FREQUENTLY ASKED QUESTIONS ## FOR FREQUENTLY ASKED QUESTIONS //
    public function focus_sector()
    {
        $focusSector = FocusSector::all();
        return view('admin/frontendSettings.focusSector', compact('focusSector'));
    }


    public function create_focus_sector(Request $request)
    {

        // validation of inputs
        $request->validate([
            'image' => 'required',
            'img_title' => 'required'
        ]);

        $sectorData = new FocusSector();

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('updates', $imagename);

        $sectorData->image = $imagename;

        $sectorData->img_title = $request->img_title;
        $sectorData->save();
        return redirect()->back()->with('message', 'Added successfully');
    }

    // edit view
    public function edit_focus_sector($id)
    {
        $data = FocusSector::find($id);
        return view('admin/frontendSettings.editFocusSector', compact('data'));
    }


    public function update_focus_sector(Request $request, $id)
    {

        // validation of inputs
        $request->validate([
            'image' => 'required',
            'img_title' => 'required'
        ]);


        $fdata = FocusSector::find($id);

        $fdata->img_title = $request->img_title;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('updates', $imagename);
            $fdata->image = $imagename;
        }

        $fdata->save();
        // return redirect()->route('admin/faq')->with('message', 'Update was Successfull');
        return redirect()->back()->with('message', 'Update Was Successful');
    }

    // Delete faq
    public function delete_focus_sector($id)
    {
        $data = FocusSector::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Successfully deleted');
    }


    // FOR CRITERIA
    public function create_criteria(Request $request)
    {

        // validation of inputs
        $request->validate([
            'focus_text' => 'required',
            'eligibility_title' => 'required',
            'eligibility_criteria' => 'required',
            'selection_title' => 'required',
            'selection_criteria' => 'required',
            'more_btn' => 'required'
        ]);

        $criteria = new Criteria();
        $criteria->focus_text = $request->focus_text;
        $criteria->eligibility_title = $request->eligibility_title;
        $criteria->eligibility_criteria = $request->eligibility_criteria;
        $criteria->selection_title = $request->selection_title;
        $criteria->selection_criteria = $request->selection_criteria;
        $criteria->more_btn = $request->more_btn;

        $criteria->save();
        return redirect()->back()->with('message', 'Settings completed successfully');
    }

    // FOR TIMELINE
    public function create_timeline(Request $request)
    {

        // validation of inputs
        $request->validate([
            'title' => 'required',
            'image' => 'required'
        ]);

        $t_data = new Timeline();
        $t_data->title = $request->title;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('updates', $imagename);

        $t_data->image = $imagename;

        $t_data->save();
        return redirect()->back()->with('message', 'Settings completed successfully');
    }

    // FOR TIMELINE
    public function create_title(Request $request)
    {

        // validation of inputs
        $request->validate([
            'solultion_title' => 'required',
            'sector_title' => 'required',
            'benefit_title' => 'required'

        ]);

        $titles = new Title();
        $titles->solultion_title = $request->solultion_title;
        $titles->sector_title = $request->sector_title;
        $titles->benefit_title = $request->benefit_title;

        $titles->save();
        return redirect()->back()->with('message', 'Settings completed successfully');
    }





    // Benefit View
    public function benefit_setting()
    {
        $benefits = Benefit::all();
        return view('admin/frontendSettings.benefit', compact('benefits'));
    }


    public function create_benefit(Request $request)
    {
        // validation of inputs
        $request->validate([
            'benefit' => 'required'
        ]);

        $benefit_data = new Benefit();
        $benefit_data->benefit = $request->benefit;
        $benefit_data->save();
        return redirect()->back()->with('message', 'Benefit added successfully');
    }


    // edit view
    public function edit_benefit($id)
    {
        $data = Benefit::find($id);
        return view('admin/frontendSettings.editBenefit', compact('data'));
    }

    public function update_benefit(Request $request, $id)
    {

        // validation of inputs
        $request->validate([
            'benefit' => 'required'
        ]);

        $bdata = Benefit::find($id);
        $bdata->benefit = $request->benefit;
        $bdata->save();
        // return redirect()->route('admin/faq')->with('message', 'Update was Successfull');
        return redirect()->back()->with('message', 'Update Was Successful');
    }

    // Delete benefit
    public function deleteBenefit($id)
    {
        $data = Benefit::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Benefit Successfully deleted');
    }



    // FOR FREQUENTLY ASKED QUESTIONS ## FOR FREQUENTLY ASKED QUESTIONS //
    public function faq()
    {
        $faqs = Faq::all();
        return view('admin/frontendSettings.faq', compact('faqs'));
    }

    public function create_faq(Request $request)
    {

        // validation of inputs
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq_data = new Faq();
        $faq_data->question = $request->question;
        $faq_data->answer = $request->answer;
        $faq_data->save();
        return redirect()->back()->with('message', 'Question and Answer added successfully');
    }

    // edit view
    public function edit_faq($id)
    {
        $data = Faq::find($id);
        return view('admin/frontendSettings.editFaq', compact('data'));
    }


    public function update_faq(Request $request, $id)
    {

        // validation of inputs
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $fdata = Faq::find($id);
        $fdata->question = $request->question;
        $fdata->answer = $request->answer;
        $fdata->save();
        // return redirect()->route('admin/faq')->with('message', 'Update was Successfull');
        return redirect()->back()->with('message', 'Update Was Successful');
    }

    // Delete faq
    public function deleteFaq($id)
    {
        $data = Faq::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Question and Answer Successfully deleted');
    }



    // FOR FOOTER
    public function create_footer(Request $request)
    {

        // validation of inputs
        $request->validate([
            'email' => 'required',
            'location' => 'required',
            'giz' => 'required',
            'postal_address' => 'required',
            'po_box' => 'required',
            'city' => 'required',
            'copyright' => 'required'
        ]);

        $footer = new Footer();
        $footer->email = $request->email;
        $footer->location = $request->location;
        $footer->giz = $request->giz;
        $footer->postal_address = $request->postal_address;
        $footer->po_box = $request->po_box;
        $footer->city = $request->city;
        $footer->copyright = $request->copyright;
        $footer->save();
        return redirect()->back()->with('message', 'Footer Updated successfully');
    }
}
