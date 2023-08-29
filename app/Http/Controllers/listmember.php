<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class listmember extends Controller
{
   function fetchdata(){


    $data=Complaint::all();
    return view('list',['data'=>$data]);

   // return view('list');
    //  return Complaint::all();
   }
}
