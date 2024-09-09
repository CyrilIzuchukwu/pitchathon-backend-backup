<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApplicantFormController;
use App\Http\Controllers\ApplicantProfileFormController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OfficeHourController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AllSolutionsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UiController;
// use App\Http\Controllers\NewRegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// admin route start// admin route start// admin route start// admin route start// admin route start// admin route start// admin route start
Auth::routes();

// Route::get('/register', [NewRegistrationController::class, 'index']);
// Route::post('/signmeup', [NewRegistrationController::class, 'register']);

Route::post('/send_email', [MailController::class, 'send_email'])->name('send_emails');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/dashboard', [App\Http\Controllers\admin\FrontendController::class, 'index']);

    Route::get('admin/application', [App\Http\Controllers\admin\ApplicantController::class, 'index']);
    Route::get('applications/{id}', [App\Http\Controllers\admin\ApplicantController::class, 'edit']);


    Route::get('admin/retail', [App\Http\Controllers\admin\RetailController::class, 'index']);
    Route::get('retails/{id}', [App\Http\Controllers\admin\RetailController::class, 'edit']);

    Route::get('admin/greenEconomy', [App\Http\Controllers\admin\GreenEconomyController::class, 'index']);
    Route::get('greenEconomys/{id}', [App\Http\Controllers\admin\GreenEconomyController::class, 'edit']);

    Route::get('admin/production', [App\Http\Controllers\admin\ProductionController::class, 'index']);
    Route::get('productions/{id}', [App\Http\Controllers\admin\ProductionController::class, 'edit']);

    Route::get('admin/userManagement', [App\Http\Controllers\admin\UserManagementController::class, 'index'])->name('admin.useraa');
    Route::get('userManagements/{id}', [App\Http\Controllers\admin\UserManagementController::class, 'edit']);
    Route::get('userManagementss/{id}', [App\Http\Controllers\admin\UserManagementController::class, 'edit1']);
    Route::get('userManagementsss/{id}', [App\Http\Controllers\admin\UserManagementController::class, 'update']);
    Route::get('userManagementsss2/{id}', [App\Http\Controllers\admin\UserManagementController::class, 'update1']);
    Route::post('/generate-code', [App\Http\Controllers\admin\UserManagementController::class, 'generateCode']);


    Route::get('admin/notification', [App\Http\Controllers\admin\NotificationController::class, 'index']);
    Route::post('admin/notificationx', [App\Http\Controllers\admin\NotificationController::class, 'sendNotification']);
    Route::get('admin/notification/{id}', [App\Http\Controllers\admin\NotificationController::class, 'index']);

    Route::get('admin/shortlist', [App\Http\Controllers\admin\ShortlistsController::class, 'index']);
    Route::get('shortlists/{id}', [App\Http\Controllers\admin\ShortlistController::class, 'edit']);
    Route::post('shortlistss', [App\Http\Controllers\admin\ShortlistController::class, 'update']);
    // Route::post('shortlistsss/{id}', [App\Http\Controllers\admin\ShortlistController::class, 'update1']);
    Route::get('shortlistsss/{id}', [App\Http\Controllers\admin\ShortlistController::class, 'update1']);

    Route::get('admin/finalist', [App\Http\Controllers\admin\FinalistController::class, 'index']);
    Route::get('finalists/{id}', [App\Http\Controllers\admin\FinalistController::class, 'edit']);
    Route::post('finalistss', [App\Http\Controllers\admin\FinalistController::class, 'update']);
    // Route::post('finalistsss/{id}', [App\Http\Controllers\admin\FinalistController::class, 'update1']);
    Route::get('finalistsss/{id}', [App\Http\Controllers\admin\FinalistController::class, 'update1']);

    // Route::get('/register', [App\Http\Controllers\admin\FrontendController::class, 'register1']);

    
    Route::post('/adminregister', [App\Http\Controllers\admin\FrontendController::class, 'register2']);


    Route::get('update/status/{user_id}/{status}', [App\Http\Controllers\admin\UserManagementController::class, 'disable'])->name('users.update.status');
    Route::get('update/status1/{user_id}/{status1}', [App\Http\Controllers\admin\UserManagementController::class, 'disable1'])->name('users.updates.status');

    // Route::get('admin/delete-reviewer/{id}', [App\Http\Controllers\admin\UserManagementController::class, 'destroy']);
    // Route::get('admin/delete-jury/{id}', [App\Http\Controllers\admin\UserManagementControllerr::class, 'destroy1']);

    Route::get('update/delete/{user_id}/{deleted_at}', [App\Http\Controllers\admin\UserManagementController::class, 'destroy'])->name('users.update.deleted_at');
    Route::get('update1/delete/{user_id}/{deleted_at}', [App\Http\Controllers\admin\UserManagementController::class, 'destroy1'])->name('users.update1.deleted_at');

    Route::get('admin/restore', [App\Http\Controllers\admin\UserManagementController::class, 'restore']);
    Route::get('admin/restore1/{user_id}/{deleted_at}', [App\Http\Controllers\admin\UserManagementController::class, 'restore1'])->name('users.update1.restore');
    Route::get('admin/restore2/{user_id}/{deleted_at}', [App\Http\Controllers\admin\UserManagementController::class, 'restore2'])->name('users.update2.restore');






    // MAIL VIEW
    Route::get('admin/sendEmailForm', [MailController::class, 'sendEmailForm'])->name('sendEmailForm');







    // UI SETTINGS UI SETTINGS UI SETTINGS UI SETTINGS ######################################################

    // Uisetting view
    Route::get('admin/uisetting', [UiController::class, 'uisetting'])->name('uisetting');


    // Theme Color
    Route::post('admin/create_theme_color', [UiController::class, 'create_theme_color'])->name('create_theme_color');


    // CREATE TOP NAV IMAGE
    Route::post('admin/create_top_nav_img', [UiController::class, 'create_top_nav_img'])->name('create_top_nav_img');

    // CREATE LOGO
    Route::post('admin/create_logo', [UiController::class, 'create_logo'])->name('create_logo');

    // CREATE HERO TEXT
    Route::post('admin/create_hero_text', [UiController::class, 'create_hero_text'])->name('create_hero_text');

    // CREATE JOUNREY
    Route::post('admin/create_journey', [UiController::class, 'create_journey'])->name('create_journey');

    // CREATE COUNTDOWN
    Route::post('admin/create_countDown', [UiController::class, 'create_countDown'])->name('create_countDown');


    // CREATE ELIGIBILITY
    Route::post('admin/create_eligibility', [UiController::class, 'create_eligibility'])->name('create_eligibility');



    // focus sector view
    Route::get('admin/focus_sector', [UiController::class, 'focus_sector'])->name('focus_sector');
    // create focus_sector
    Route::post('admin/create_focus_sector', [UiController::class, 'create_focus_sector'])->name('create_focus_sector');
    // edit focus_sector
    Route::get('admin/edit_focus_sector/{id}', [UiController::class, 'edit_focus_sector'])->name('edit_focus_sector');
    // update focus_sector
    Route::post('admin/update_focus_sector/{id}', [UiController::class, 'update_focus_sector'])->name('update_focus_sector');
    // Delete focus_sector
    Route::get('admin/delete_focus_sector/{id}', [UiController::class, 'delete_focus_sector'])->name('delete_focus_sector');



    // CREATE CRITERIA
    Route::post('admin/create_criteria', [UiController::class, 'create_criteria'])->name('create_criteria');

    // CREATE TIMELINE
    Route::post('admin/create_timeline', [UiController::class, 'create_timeline'])->name('create_timeline');


    // CREATE OTHER TITLES
    Route::post('admin/create_title', [UiController::class, 'create_title'])->name('create_title');

    // benefit view create benefit
    Route::get('admin/benefit_setting', [UiController::class, 'benefit_setting'])->name('benefit_setting');
    // create question and answer
    Route::post('admin/create_benefit', [UiController::class, 'create_benefit'])->name('create_benefit');
    // edit benefit
    Route::get('admin/edit_benefit/{id}', [UiController::class, 'edit_benefit'])->name('edit_benefit');
    // update faq
    Route::post('admin/update_benefit/{id}', [UiController::class, 'update_benefit'])->name('update_benefit');
    // Delete faq
    Route::get('admin/deleteBenefit/{id}', [UiController::class, 'deleteBenefit'])->name('deleteBenefit');




    // faq view create_faq
    Route::get('admin/faq', [UiController::class, 'faq'])->name('faq');
    // create question and answer
    Route::post('admin/create_faq', [UiController::class, 'create_faq'])->name('create_faq');
    // edit faq
    Route::get('admin/edit_faq/{id}', [UiController::class, 'edit_faq'])->name('edit_faq');
    // update faq
    Route::post('admin/update_faq/{id}', [UiController::class, 'update_faq'])->name('update_faq');
    // Delete faq
    Route::get('admin/deleteFaq/{id}', [UiController::class, 'deleteFaq'])->name('deleteFaq');


    // CREATE FOOTER
    Route::post('admin/create_footer', [UiController::class, 'create_footer'])->name('create_footer');
});


// admin route startends// admin route startends// admin route startends//



// subadmin route start// subadmin route start// subadmin route start// subadmin route start// subadmin route start// subadmin route start// subadmin route start
Route::middleware(['auth', 'isSubAdmin'])->group(function () {
    Route::get('Sub_admin/dashboard', [App\Http\Controllers\subadmin\FrontendController::class, 'index']);
});


// subadmin route start// subadmin route start// subadmin route start



// review start// review start// review start// review start// review start//
Route::middleware(['auth', 'isReviewAdmin'])->group(function () {
    Route::get('Review/dashboard', [App\Http\Controllers\review\FrontendController::class, 'index']);
    Route::get('Review/notification', [App\Http\Controllers\review\FrontendController::class, 'index1']);
    Route::get('Review/review/{id}', [App\Http\Controllers\review\FrontendController::class, 'index2']);
    Route::post('Review/post/{id}',  [App\Http\Controllers\review\FrontendController::class, 'index3']);

    //  Route::get('Review/applicant-profile', [App\Http\Controllers\review\FrontendController::class, 'index4']);
    // Route::get('Review/applicant-profile-edit/', [App\Http\Controllers\review\FrontendController::class, 'edit']);
    // Route::put('updatez', [App\Http\Controllers\review\FrontendController::class, 'update1']);
    //  Route::post('profiles', [App\Http\Controllers\review\FrontendController::class, 'store']);

    Route::get('Review/settings', [App\Http\Controllers\review\FrontendController::class, 'settings']);
    Route::post('Review/settings1', [App\Http\Controllers\review\FrontendController::class, 'update']);
});


// review  end// review  end// review  end// review  end// review  end




// jury start// jury start// jury start// jury start// jury start// jury start//
Route::middleware(['auth', 'isJuryAdmin'])->group(function () {
    Route::get('Jury/dashboard', [App\Http\Controllers\jury\FrontendsController::class, 'index']);
    Route::get('Jury/notification', [App\Http\Controllers\jury\FrontendsController::class, 'index1']);
    Route::get('Jury/review/{id}', [App\Http\Controllers\jury\FrontendsController::class, 'index2']);
    Route::post('Jury/post/{id}',  [App\Http\Controllers\jury\FrontendsController::class, 'index3']);



    //   Route::get('Jury/applicant-profile', [App\Http\Controllers\review\FrontendController::class, 'index4']);
    // Route::get('Jury/applicant-profile-edit/', [App\Http\Controllers\review\FrontendController::class, 'edit']);
    // Route::post('Jury/update-user', [App\Http\Controllers\review\FrontendController::class, 'update']);
    //  Route::post('Jury/profile', [App\Http\Controllers\review\FrontendController::class, 'store']);

    Route::get('Jury/setting', [App\Http\Controllers\jury\FrontendsController::class, 'settings']);
    Route::post('Jury/settings', [App\Http\Controllers\jury\FrontendsController::class, 'update']);
});
// jury end// jury end// jury end// jury end// jury end// jury end// jury end//





// frontend route start// frontend route start// frontend route start// frontend route start// frontend route start
// Route::get('/', function () {
//     return view('welcome');
// });

//
Route::get('/', [AllSolutionsController::class, 'home']);

// Route::get('send', [ApplicantFormController::class, 'send']);
Route::get('/eligibility', function () {
    return view('eligibility');
});

Route::get('/criterion', function () {
    return view('criterion');
});

Route::get('/all-solutions', [AllSolutionsController::class, 'index']);

Route::get('/solution-details/{details}', [AllSolutionsController::class, 'show']);

Route::get('/shortlisted', [AllSolutionsController::class, 'shortlisted']);

Route::get('/shortlisted-solution-details/{details}', [AllSolutionsController::class, 'shortlisted_details']);

Route::get('/selectedSolution', [AllSolutionsController::class, 'selected']);
//  Route::get('logins1', [AllSolutionsController::class, 'logins1']);
//  Route::post('logins2', [AllSolutionsController::class, 'logins2']);
Route::group(['middleware' => ['auth', 'role:applicant']], function () {
    Route::get('/applicant-review', [ReviewController::class, 'index'])->name('review');
    Route::get('/applicant-office', [OfficeHourController::class, 'index'])->name('office');
    Route::get('/applicant-notification', [NotificationController::class, 'index'])->name('notifications');
    Route::get('/applicant-dashboard', function () {
        return view('applicant');
    });
    Route::get('/apply-form', [ApplicantFormController::class, 'create']);
    Route::post('/apply-forms', [ApplicantFormController::class, 'store'])->name('store.applicant');
    // Route::get('/applicant-profile', function () {
    //     return view('applicant-profile');
    // });
    Route::get('applicant-profile', [App\Http\Controllers\ApplicantProfileFormController::class, 'index']);
    Route::get('applicant-profile-edit/', [App\Http\Controllers\ApplicantProfileFormController::class, 'edit']);
    Route::post('update-user', [App\Http\Controllers\ApplicantProfileFormController::class, 'update']);

    Route::get('setting', [App\Http\Controllers\HomeController::class, 'settings']);
    Route::post('settings', [App\Http\Controllers\HomeController::class, 'update']);

    Route::post('/profile', [ApplicantProfileFormController::class, 'store'])->name('store.profile');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
// frontend route ends// frontend route ends// frontend route ends//
