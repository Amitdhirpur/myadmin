<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\TodoTask;

class TestController extends Controller
{
  public function abc()
  {
    return view('test.abc');
  }

  public function test()
  {
    return view('test.test1');
  }
}
