<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use App\Models\Applicant_form;
use App\Models\Reviewrating;
use App\Models\Juryratings;
use App\Models\Code;
use Exception;
use App\Models\User;
class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $btc = new Reviewrating();
         $btcs = new Juryratings();
        $btc = Reviewrating::orderBy("id", "desc")->paginate(30);
        $btcs = Juryratings::orderBy("id", "desc")->paginate(30);
     
        return view('admin.userManagement',compact('btc','btcs'));
    }
    
    public function generateCode(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:codes|max:255',
        ]);
    
        $code = new Code;
        $code->code = $request->input('code');
        $code->is_used = false;
        $code->save();
    
        return redirect('/admin/userManagement')->with('message', 'Code generated successfully.');
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
    // $btc = Reviewrating::findorFail($id);
    $btc = Reviewrating::where('reviewerid',$id)->get();
    $btcs = Reviewrating::where('reviewerid',$id)->first();
    
    // $user = Applicant_form::where('user_id',$userid)->where('statuss', 1)->firstOrFail();
    
    $user = Applicant_profile::where('user_id', $btcs->reviewerid)->first();
    $users = Applicant_profile::where('user_id', $btcs->userid)->get();
    return view('admin.userManagement.edit',compact('btc','btcs','user','users'));
    }
    
    
    public function edit1($id)
    {
    // $btc = Reviewrating::findorFail($id);
    $btc = Juryratings::where('juryid',$id)->get();
    $btcs = Juryratings::where('juryid',$id)->first();
    
    $user = Applicant_profile::where('user_id', $btcs->juryid)->first();
    $users = Applicant_profile::where('user_id', $btcs->juryid)->get();
    return view('admin.userManagement.edit1',compact('btc','btcs','user','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        
        
            $btc = Applicant_form::where('user_id',$user_id)->first();

            $review = Reviewrating::where("userid",$btc->user_id)->get();
      
      $btcss = Juryratings::where("userid",$btc->user_id)->get();

        return view('admin.applicant.edit',compact('btc','review','btcss'));
        
        
        //             try {
        //     $btcsend = Reviewrating::where('userid',$userid)->where('status', 2)->firstOrFail();
        //     $btcsend->status = '1';
        //     $btcsend->update();

        //     $user = Applicant_form::where('user_id',$userid)->where('statuss', 1)->firstOrFail();
        //     $user->status = "applied";     
        //     $user->update();
        //   return redirect('admin/shortlist')->with('message', 'Applicant has been Unpublish');
        // } catch (Exception $e) {
        //     return redirect()->back()->with('error', 'This user has been updated!');
        // }
    }
    public function update1(Request $request, $user_id)
    {
        
        
            $btc = Applicant_form::where('user_id',$user_id)->first();

            $review = Reviewrating::where("userid",$btc->user_id)->get();
      
      $btcss = Juryratings::where("userid",$btc->user_id)->get();

        return view('admin.applicant.edit',compact('btc','review','btcss'));
        
        
        //             try {
        //     $btcsend = Reviewrating::where('userid',$userid)->where('status', 2)->firstOrFail();
        //     $btcsend->status = '1';
        //     $btcsend->update();

        //     $user = Applicant_form::where('user_id',$userid)->where('statuss', 1)->firstOrFail();
        //     $user->status = "applied";     
        //     $user->update();
        //   return redirect('admin/shortlist')->with('message', 'Applicant has been Unpublish');
        // } catch (Exception $e) {
        //     return redirect()->back()->with('error', 'This user has been updated!');
        // }
    }
    public function disable($user_id , $status)
    {
           try{
               $update_user = User::whereId($user_id)->update([
                   'status' => $status]);
                   if($status == 1){
                   if($update_user){
                       return redirect()->back()->with('message', 'Reviwer is now enabled !');
                   }
                   }elseif($status == 0){
                       return redirect()->back()->with('message', 'Reviwer is now disabled !');
                   }
                   return redirect()->back()->with('error', 'fail to update!');

    } catch (Exception $e) {
            return redirect()->back()->with('error', 'You did not select any input!');
        }
    }
    // jury
    
        public function disable1($user_id , $status1)
    {
           try{
               $update_user = User::whereId($user_id)->update([
                   'status1' => $status1]);
                   
                     if($status1 == 1){
                   if($update_user){
                       return redirect()->back()->with('message', 'Jury is now enabled!');
                   }
                     }elseif($status1 == 0){
                        return redirect()->back()->with('message', 'Jury is now disabled!'); 
                     }
                   return redirect()->back()->with('error', 'fail to update!');

    } catch (Exception $e) {
            return redirect()->back()->with('error', 'You did not select any input!');
        }
    }
        public function softdelete($id)
    {
        //
    }
 
    
        public function destroy($user_id , $deleted_at)
    {
          try{
               $update_user = User::whereId($user_id)->delete([
                   'deleted_at' => $deleted_at]);
                   
                   if($deleted_at == 'delete'){
                   if($update_user){
                       return redirect()->back()->with('message', 'Reviwer is now deleted !');
                   }
                   }
                   return redirect()->back()->with('error', 'fail to update!');

    } catch (Exception $e) {
            return redirect()->back()->with('error', 'You did not select any input!');
        }
    }
    
    
    
    
        
    
           public function restore()
    {
      $user = User::onlyTrashed()->orderBy('deleted_at','desc')->get();
      return view('admin.userManagement.restore' , compact('user'));
    }

    
           public function destroy1($user_id , $deleted_at)
    {
          try{
               $update_user = User::whereId($user_id)->delete([
                   'deleted_at' => $deleted_at]);
                   if($update_user){
                       return redirect()->back()->with('message', 'Jury is now restored !');
                   }
                   
                   return redirect()->back()->with('error', 'fail to update!');

    } catch (Exception $e) {
            return redirect()->back()->with('error', 'You did not select any input!');
        }
    }
    
    
               public function restore1($user_id , $deleted_at)
    {
          try{
               $update_user = User::whereId($user_id)->restore([
                   'deleted_at' => $deleted_at]);
                   
                   if($deleted_at == 'restore'){
                   if($update_user){
                       return redirect('admin/userManagement')->with('message', 'Reviwer is now restored !');
                   }
                   }
                   return redirect()->back()->with('error', 'fail to update!');

    } catch (Exception $e) {
            return redirect()->back()->with('error', 'You did not select any input!');
        }
    }
    
    
                   public function restore2($user_id , $deleted_at)
    {
          try{
               $update_user = User::whereId($user_id)->restore([
                   'deleted_at' => $deleted_at]);
                   
                   if($deleted_at == 'restore'){
                   if($update_user){
                       return redirect('admin/userManagement')->with('message', 'Jury is now restored !');
                   }
                   }
                   return redirect()->back()->with('error', 'fail to update!');

    } catch (Exception $e) {
            return redirect()->back()->with('error', 'You did not select any input!');
        }
    }
    
    //     public function destroy1($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();
    //     return redirect()->back()->with('message', 'Jury Deleted Successfully');
    // }
}
