<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aggregate extends Controller
{
    function index(){
        return DB::table('Complaints')->max('descp');
        //return DB::table('Complaints')->count();
       // return DB::table('Complaints')->sum('aadhar');
        //return DB::table('Complaints')->min('id');
        //return DB::table('Complaints')->max('id');
       // return DB::table('Complaints')->avg('id');
       // return DB::table('Complaints')->get();
    }

}
