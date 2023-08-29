<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileuploadcontroller extends Controller
{
    function upload(Request $re){
       // return "file uploaded sucessfully";
      // return $re->file('file').store('docs');
      $file = $re->file('file'); // Get the uploaded file
      $path = $file->store('docs');    // Store the file in the 'docs' directory

      return "File uploaded successfully. Stored at: " . $path;
    }
}
