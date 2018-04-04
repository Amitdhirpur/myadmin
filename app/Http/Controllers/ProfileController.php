<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\UserDetail;
use App\File;

class ProfileController extends Controller
{
  public function index()
  {
    $user = Auth::user();
    $data['user'] = $user;
    $data['userDetail'] = $user->detail()->first();
   return view('dashboard.profile.index',$data);
  }

  public function timeline()
  {
    $user = Auth::user();
    $data['user'] = $user;
    $data['userDetail'] = $user->detail()->first();
   return view('dashboard.profile.timeline',$data);
  }

  public function connections()
  {
    $user = Auth::user();
    $data['user'] = $user;
    $data['userDetail'] = $user->detail()->first();
   return view('dashboard.profile.connections',$data);
  }

  public function profilephotos()
  {
      $user = Auth::user();
      $data['user'] = $user;
      $data['userDetail'] = $user->detail()->first();
      $data['images'] = File::  paginate(16);
      return view('dashboard.profile.photos',$data);
  }

  public function upload()
  {
      $user = Auth::user();
      $data['user'] = $user;
      $data['userDetail'] = $user->detail()->first();
      return view('dashboard.profile.upload',$data);
  }

  public function Videos()
  {
    $user = Auth::user();
    $data['user'] = $user;
    $data['userDetail'] = $user->detail()->first();

    $data['images'] = File::where('mime_type','like', 'video%')->paginate(16);
    return view('dashboard.profile.videos',$data);
  }

  public function coverphoto()
  {
      $user = Auth::user();
      $data['user'] = $user;
      $data['userDetail'] = $user->detail()->first();
      return view('dashboard.profile.coverphoto',$data);
  }
  public function updateprofile($id)
  {
    $user = Auth::user();
    $filePath = File::find($id);

    $profileDetail = $filePath['image_path'];
    $userDetail = UserDetail::firstOrNew(['user_id' => $user->id]);
    $userDetail->cover_pic = $profileDetail;
    $userDetail->save();
    return back();
  }
  public function store(Request $request)
  {

    $user = Auth::user();
    $userDetail = UserDetail::firstOrNew(['user_id' => $user->id]);

    if(isset($request->summary)){
      $userDetail->about=$request->about;
    }

    if(isset($request->basic)){
       $userDetail->gender=$request->gender;
       $userDetail->birthday=$request->birthday;
       $userDetail->marital_status=$request->martial_status;
     }

    if(isset($request->contact)){
      $userDetail->mobile=$request->mobile;
      $userDetail->address=$request->address;
      $userDetail->twitter=$request->twitter;
      $userDetail->skype=$request->skype;
      $userDetail->position=$request->position;

      $file =$request->file('image');
      if($file && $file->isValid()){
        $filename = $file->getClientOriginalName();
        $filetype = $file->getClientMimeType();
        $file->move(public_path().'/image/',$filename);
        $path = '/image/'.$filename;
        $userDetail->cover_pic = $path;
       }

      $user->email = $request->email;
    }

    if(isset($request->addStatus)){

      $userDetail->status=$request->status;
      }
  if(isset($request->uploadImage))
      {
        $file =$request->file('image');
        if($file && $file->isValid()){
          $filename = $file->getClientOriginalName();
          $filetype = $file->getClientMimeType();
          $file->move(public_path().'/image/',$filename);
          $path = '/image/'.$filename;
          $userDetail->profile_pic = $path;
         }
      }
      if(isset($request->uploadCover))
          {
            $file =$request->file('image');
            if($file && $file->isValid()){
              $filename = $file->getClientOriginalName();
              $filetype = $file->getClientMimeType();
              $file->move(public_path().'/image/',$filename);
              $path = '/image/'.$filename;
              $userDetail->cover_pic = $path;
             }
          }
      $userDetail->save();
      $user->save();
      return back();



  }

}
