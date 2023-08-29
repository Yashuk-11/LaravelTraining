<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function getlocAttribute($val){
        return ucfirst($val);   //To capitalize first letter
    }
    public function getdescpAttribute($val){
        return ($val.',India');
    }

    public function setlocAttribute($val){
        $this->attributes['loc']=$val.',India'; //save in the database , it will update value before saving it in databse
    }

    public function getUserdetail(){
      //  return $this->hasOne('\App\Models\Userdetail');
      //  return $this->hasMany('\App\Models\Userdetail');
    }
}
