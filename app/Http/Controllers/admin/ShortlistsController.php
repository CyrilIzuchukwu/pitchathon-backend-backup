<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant_profile;
use App\Models\Applicant_form;
use Illuminate\Support\Facades\Auth;
use App\Models\Reviewrating;
class ShortlistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //  $user = new Billingsetup();
        // $user = Billingsetup::orderBy("id", "desc")->paginate(10);
        
        // $review = Reviewrating::where('status', '0')->paginate(4);

        $review = new Reviewrating();
        // $review = Reviewrating::orderBy("average", "desc")->paginate(4);
        
        
        $review= Reviewrating::orderBy("average", "desc")->when($request->filter !=null, function ($q) use ($request){
             return $q->where('target_sector', $request->filter);
         })->paginate(4);
        
        
         $product = Applicant_form::where('status', 'Approved')->count();
         
        //   if ($product->count() > 0) {
        //         $product;
        //         } else {
        //             $product = "0";
        //         }
        $reviewCount = Reviewrating::all();
         
        return view('admin.shortlist', compact('review','product','reviewCount'));
    }
}
