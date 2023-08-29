<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userrequestcontroller extends Controller
{
    function getdata(Request $re){
        //return "data will be here";
        //return $re->input();
        $data=$re->input('name');
        $re->session()->flash('name',$data); //refresh page after submitting page
        return redirect('userrequest');

    }
}
