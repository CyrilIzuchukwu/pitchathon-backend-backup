<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant_form extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name_of_business', 'name_of_product', 'country_of_registration', 'video_pitch','country_of_operation', 'founder_name', 'address', 'email', 'phone', 'facebook', 'twitter', 'linkedin', 'description', 'target_sector','impact_on_msme', 'time_in_operation', 'total_revenue', 'mrr', 'team_size_full', 'team_size_part',  'pitch_deck', 'solution_url', 'solution_url_confirm', 'participation_reason', 'hear_about_techmybiz', 'otherOption', 'status'];

    function user(){
    return $this->belongsTo(User::class);
    }
    
     function profile_image(){
    return $this->hasMany(Applicant_profile::class);
    }
    
    //  public function productImages(){
    //     return $this->hasMany(ProductImage::class,'product_id','id');
    // }
}
