<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    function mycontroller(){
        /*
        echo $name;
        echo " Hii This is message from controller"; */
       // return ["name" => "yashu","age"=>20];     //we can pass values to api,it will display as json value
   //    return view("content");  //calling view page from controller and remove parameter from function declaration
       // return view("content",["name"=>"yashu"]);   //passing data from controller to view
      //  return view("content",["name"=>['yashu',"20"]])   <!--{{count($name)}} -->

      $data=["yashu","soumya","chethu"];
      return view("content",["name"=>$data]);
        }
    function mycontroller1($name) {

        return view("content",["name"=>$name]);   //passing the values from url to views through controller
    }
}
