<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databasevalues extends Controller
{
    function index(){

       //echo "from databasevalues";


   // return  extension_loaded('pdo_mysql') ? 'PDO MySQL extension is enabled.' : 'PDO MySQL extension is NOT enabled.';


       return DB::select('select *from userdetails');
    }
}
