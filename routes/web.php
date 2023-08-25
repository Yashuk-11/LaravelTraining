<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\loginpage;
use App\Http\Controllers\databasevalues;
use App\Http\Controllers\Userdetailcontroller;


Route::get('/', function () {
  //  Route::get('/{name}', function ($name) {
   // echo $name;                              //To display url data
  //  return view('welcome',['user'=>$name]);   //To pass data from url to curent page
  //  return view('welcome');
     return redirect('welcome');               //To redirect page
    //    return view('welcome');
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
