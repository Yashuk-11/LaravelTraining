<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdetail;
class Userdetailcontroller extends Controller
{
    function fetchdata(){
        return Userdetail::all();
    }
}
