<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUploadController extends Controller
{
   
    public function upload(Request  $request){
        $request ->validate(['file' => 'required|mimes:jpg,png,jpeg,pdf']);

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
    
        $file->move(public_path('uploads'), $filename);

        return back() -> with('success' , 'file upload successfully');
    }
}
