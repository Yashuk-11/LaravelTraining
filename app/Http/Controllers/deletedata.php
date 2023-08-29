<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class deletedata extends Controller
{
    function list(){
        $data=Complaint::all();
        return view('deletedata',['data'=>$data]);

    }
    function delete($id){
        $data=Complaint::find($id);
        $data->delete();
        return "data deleted";
    }
    function edit($id){
        $data= Complaint::find($id);
        return view('edit',['data'=>$data]);
    }

    function update(Request $re){
       $data=Complaint::find($re->id);
       $data->aadhar=$re->aadhar;
       $data->date=$re->date;
       $data->descp=$re->desc;
       $data->loc=$re->loc;
       $data->save();
       return redirect('list');
    }
}
