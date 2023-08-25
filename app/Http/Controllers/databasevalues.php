<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databasevalues extends Controller
{
    function index(){

       // echo "from databasevalues";

       return DB::select('select *from userdetails');
    }
}
