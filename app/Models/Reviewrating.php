<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewrating extends Model
{
    use HasFactory;

        function user(){
        return $this->belongsTo(User::class,'userid','id');
    }

       function review(){
        return $this->belongsTo(User::class,'reviewerid','id');
    }

}
