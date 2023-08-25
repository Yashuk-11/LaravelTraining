<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginpage extends Controller
{
    //
    function getdata(Request $re ){
      //  return "form is recoreded";
      $re->validate([
        'username'=>'required|max:10',
        'password'=>'required|min:5'
      ]);

      return $re->input();
    }
}
