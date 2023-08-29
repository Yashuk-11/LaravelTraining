<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class accessor extends Controller
{
   function access(){
    return Complaint::all();
   }

   function mutator(){

    $data=new Complaint;
    $data->aadhar='123456789023';
    $data->date='12/2/23';
    $data->descp='lost phone';
    $data->loc='bangaoree';
    $data->save();
   }

   function relation(){
    return Complaint::find(2)->getUserdetail;
   }


}
