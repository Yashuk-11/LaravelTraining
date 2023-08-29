<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class insertdata extends Controller
{
    function adddata(Request $re){
        $data=new Complaint;
        $data->aadhar=$re->aadhar;
        $data->date=$re->date;
        $data->descp=$re->desc;
        $data->loc=$re->loc;
        $data->save();
     return "data stored successfully";
    }
}
