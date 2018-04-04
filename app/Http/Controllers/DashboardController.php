<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TodoTask;
use Auth;

class DashboardController extends Controller
{
  public function index()
  {
    $user = Auth::user();
    $data['tasks'] = TodoTask::where('user_id', $user->id)->get();
    $data['user'] = $user;
    $data['userDetail'] = $user->detail()->first();
    return view('dashboard.index',$data);
  }

  public function list()
  {
    $user = Auth::user();
    $data['tasks'] = TodoTask::where('user_id', $user->id)->get();
    $data['user'] = $user;
    $data['userDetail'] = $user->detail()->first();
    return view('dashboard.todo.index',$data);
  }

  public function edit($id=null)
  {
    $user = Auth::user();
    $data['task'] = TodoTask::find($id);
    $data['user'] = $user;
    $data['userDetail'] = $user->detail()->first();
    return view('dashboard.todo.form',$data);
  }

  public function store(Request $request)
  {
    $request->validate([
        'title' => 'required',
        'task' => 'required',
        'taskdetail' => 'required'
    ]);

    $user = Auth::user();

    $todotask = TodoTask::firstOrNew(['id' => $request->id]);

    $todotask->user_id = $user->id;
    $todotask->title = $request->title;
    $todotask->task = $request->task;
    $todotask->taskdetail = $request->taskdetail;
    $todotask->save();

    return redirect('dashboard/list');

  }

  public function delete(Request $request, $id)
  {
      $task = TodoTask::find($id);
      if($task) $task->delete();

      return back();
  }

  public function update(Request $request)
  {
      foreach($request->id as $id){
          $task = TodoTask::where(['id' => $id])->first();

          if($task)
          {
            if(isset($request->deleteall))
              $task->delete();

            if(isset($request->updateStatus))
                $task->update(['status' => $request->status]);
          }
      }

    return back();
  }
  public function storelist(Request $request)
  {
    $user = Auth::user();
    $todotask = TodoTask::firstOrNew(['id' => $request->id]);
    $todotask->user_id = $user->id;
    $todotask->title = $request->title;
    $todotask->save();

    return back();

  }
}
