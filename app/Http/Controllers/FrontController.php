<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TodoTask;

class FrontController extends Controller
{

  public function index()
  {
    $data['tasks'] = TodoTask::all();
    return view('front.index',$data);
  }

}
