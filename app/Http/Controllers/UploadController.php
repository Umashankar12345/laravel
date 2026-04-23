<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    
public function showUploadForm(){
    return view('fileUpload');
}
    public function  upload(Request $request){

    $request->validate([
        'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
    ]);
    $file = $request->file('file');
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('uploads'), $filename);     
    return "File uploaded successfully";
    }
}
