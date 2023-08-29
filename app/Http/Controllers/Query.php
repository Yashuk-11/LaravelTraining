<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Query extends Controller
{
    function query(){
        return DB::table('crimepoll')->where('crimeid',4)->delete();


    /*   return DB::table('crimepoll')
       ->where('crimeid',4)
        ->update(
        [
            'crimetype'=>'murder'
        ]
        );
*/

     /*   return DB::table('crimepoll')
        ->insert(
        [
            'crimetype'=>'murder'
        ]
        );
*/
         // return (array)DB::table('crimepoll')->find(4);
       // return DB::table('crimepoll')->count();
      //  return DB::table('crimepoll')  //building query
       //->where('crimeid',8)
       //->get();
        //return "query data returned";
    }
}
