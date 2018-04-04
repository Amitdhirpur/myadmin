<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Auth;

class FileController extends Controller
{

  public function uploadfile(Request $request)
  {
      $userImage = new File;
      $file = $request->file('file');

      if($file && $file->isValid())
      {
        $filename = $file->getClientOriginalName();
        $filetype = $file->getClientMimeType();
        $file->move(public_path().'/image/',$filename);

        $path = '/image/'.$filename;
        $userImage->image_path = $path;
        $userImage->image_name = $filename;
        $userImage->mime_type = $filetype;

        $userImage->save();
       }

       return back();
  }

}
