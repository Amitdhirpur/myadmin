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

        if(preg_match('[video]', $filetype) && $filetype == 'video/mp4'|| $filetype == 'video/webm'|| $filetype == 'video/ogg' || preg_match('[image]', $filetype))  {

            $file->move(public_path().'/image/',$filename);

            $path = '/image/'.$filename;
            $userImage->image_path = $path;
            $userImage->image_name = $filename;
            $userImage->mime_type = $filetype;

            $userImage->save();
       }
       else{
         return response(['error' => 'only supported webm,ogg, mp4 video and images only!'],400);
      }
     }
       return back();
  }

}
