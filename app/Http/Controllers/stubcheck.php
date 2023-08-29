<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdetail;

class stubcheck extends Controller
{
    function index(Userdetail $key){ //default comes from stub
        return $key;
    }
}
