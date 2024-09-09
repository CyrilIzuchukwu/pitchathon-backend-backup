<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant_profile extends Model
{
    use HasFactory;
    public $fillable = ['user_id', 'name', 'address', 'email', 'phone', 'facebook', 'twitter', 'linkedin', 'sex', 'profile_image', 'age', 'role', 'organization', 'country','target_sector', 'education', 'profession', 'question','about_yourself','about_business'];
}
