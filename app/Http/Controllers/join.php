<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class join extends Controller
{
    function fetch(){
        return DB::table('userdetails')
        ->join('Complaints','userdetails.id','=','Complaints.id')
       // ->select('userdetails.*')
       ->select('Complaints.*')
      ->where('complaints.loc','mangalore')
        ->get();
    }
}
