<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\loginpage;
use App\Http\Controllers\databasevalues;
use App\Http\Controllers\Userdetailcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\userrequestcontroller;
use App\Http\Controllers\fileuploadcontroller;
use App\Http\Controllers\listmember;
use App\Http\Controllers\Pagination;
use App\Http\Controllers\insertdata;
use App\Http\Controllers\deletedata;
use App\Http\Controllers\Query;
use App\Http\Controllers\aggregate;
use App\Http\Controllers\join;
use App\Http\Controllers\accessor;
use App\Http\Controllers\stubcheck;

use App\Mail\Sampemail;

Route::get('/', function () {
  //  Route::get('/{name}', function ($name) {
   // echo $name;                              //To display url data
  //  return view('welcome',['user'=>$name]);   //To pass data from url to curent page
  //  return view('welcome');
    // return redirect('welcome');               //To redirect page
    //    return view('welcome');
    return new Sampemail();
});
Route::get('/welcome',function(){
    return view('welcome');
});

/*
Route::get('/hello',function(){             //Routing
    return view('hello');
});
*/

Route::get('/hello/{id}',function($id){
    return view('hello',['id'=>$id]);
});

//Route::view('/content','content');

//Route::get('/users{name}',[users::class,'mycontroller']);    //Registration with controllers and we need import to it first before using
Route::get('/users',[users::class,'mycontroller']);
//Route::get('/users{name}',[users::class,'mycontroller1']);


Route::post('/loginpage',[loginpage::class,'getdata']);
Route::view('/login','login');

Route::view('/home','home')->middleware('protectedage'); //route middleware
Route::view('/restrict','restrict');

Route::group(['middleware'=>['protectedage']],function(){      //for grouped middleware
    Route::view('/home','home');
    Route::view('/login','login');
});

Route::get('/databasevalues',[databasevalues::class,'index']);

Route::get('/Userdetailcontroller',[Userdetailcontroller::class,'fetchdata']);

Route::get('/usercontroller',[usercontroller::class,'index']);   //http client

//Route::view('/userclient','userclient');


//Route::delete('/userrequestcontroller',[userrequestcontroller::class,'getdata']);
Route::get('userrequestcontroller',[userrequestcontroller::class,'getdata']);     //flash sesion
Route::view('/userrequest','userrequest');

Route::view('/fileupload','fileupload');    //file upload
Route::post('fileuploadcontroller',[fileuploadcontroller::class,'upload']);

Route::view('/localization','localizationconcept');

Route::get('/listmember',[listmember::class,'fetchdata']);
//Route::view('/list','list');

Route::get('/pagination',[Pagination::class,'page']); //pagination


Route::view('/savedata','savedata');
Route::post('/insertdata',[insertdata::class,'adddata']);

Route::get('/list',[deletedata::class,'list']);
Route::get('/deletedata/{id}',[deletedata::class,'delete']);
Route::get('/editdata/{id}',[deletedata::class,'edit']);
Route::post('/editdata',[deletedata::class,'update']);

Route::get('/query',[Query::class,'query']); //another way to interact with database

Route::get('/aggregate',[aggregate::class,'index']);

Route::get('/join',[join::class,'fetch']);

Route::get('/access',[accessor::class,'access']); //accessor
Route::get('/mutator',[accessor::class,'mutator']);  //mutator ->updating  changes before save in database
Route::get('/relation',[accessor::class,'relation']);

Route::get('/routemodel/{key:mob}',[stubcheck::class,'index']);

