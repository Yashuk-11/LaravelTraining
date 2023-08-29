<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class Pagination extends Controller
{
   function page(){
    //$data=Complaint::all();
    $data=Complaint::paginate(5);
    return view('pagination',['data'=>$data]);
   }
}
