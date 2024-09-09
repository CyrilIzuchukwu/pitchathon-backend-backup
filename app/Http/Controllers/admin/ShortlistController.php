<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use App\Models\Applicant_form;
use Illuminate\Support\Facades\Auth;
use App\Models\Reviewrating;
class ShortlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     //  $user = new Billingsetup();
    //     // $user = Billingsetup::orderBy("id", "desc")->paginate(10);
        
    //     // $review = Reviewrating::where('status', '0')->paginate(4);

    //     $review = new Reviewrating();
    //     // $review = Reviewrating::orderBy("average", "desc")->paginate(4);
        
        
    //     $review= Reviewrating::orderBy("average", "desc")->when($request->filter !=null, function ($q) use ($request){
    //          return $q->where('target_sector', $request->filter);
    //      })->paginate(4);
        
        
    //      $product = Applicant_form::where('status', 'Approved')->count();
         
    //     //   if ($product->count() > 0) {
    //     //         $product;
    //     //         } else {
    //     //             $product = "0";
    //     //         }
    //     $reviewCount = Reviewrating::all();
         
    //     return view('admin.shortlist', compact('review','product','reviewCount'));
    // }

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
       $reviewCount = Reviewrating::where('userid',$id)->get();
    $item = Reviewrating::where('userid',$id)->first();
    
    
    return view('admin.shortlist.edit',compact('item','reviewCount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $request->validate([
            'selected' => 'required',
        ]);
        
        // dd($request->all());
        $selected = $request->input('selected');
            try {
            
            foreach($selected as $id) {
            $btcsend = Reviewrating::where('userid',$id)->where('status', 1)->firstOrFail();
            $btcsend->status = '2';
            $btcsend->save();

            $user = Applicant_form::where('user_id',$id)->where('statuss', 1)->firstOrFail();
            $user->status = "Approved";     
            $user->save();
            }
            
            return redirect('admin/shortlist')->with('message', 'Applicants has been Approved');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'This user has not been updated!');
        }
    }
   public function update1(Request $request, $userid)
    {
            try {
            $btcsend = Reviewrating::where('userid',$userid)->where('status', 2)->firstOrFail();
            $btcsend->status = '1';
            $btcsend->update();

            $user = Applicant_form::where('user_id',$userid)->where('statuss', 1)->firstOrFail();
            $user->status = "applied";     
            $user->update();
           return redirect('admin/shortlist')->with('message', 'Applicant has been Unselected');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'This user has been updated!');
        }
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
