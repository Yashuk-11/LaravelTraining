<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class usercontroller extends Controller
{
    function index(){
            // return "api data will be here";     //used for http client
       //return Http::get("https://dummy.restapiexample.com/api/v1/employees");
       $collection=Http::get("https://dummy.restapiexample.com/api/v1/employees");
       return view('/userclient',['collection'=>$collection['data']]);
    }
}
