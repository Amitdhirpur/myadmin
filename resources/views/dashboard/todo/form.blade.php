@extends('layouts.dashboard')
@section('content')
<section id="content">
   <div class="container">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-11">
         <h2>{{isset($task) && $task->id? 'Edit' : 'Add'}} Todo  </h2>
       </div>
         <div class="col-sm-1">
           <a href="/dashboard/list" class="btn btn-success" style="padding: 6px 22px 6px 22px;" role="button">Back</a>
        </div>
       </div>
      </div>
      <div class="card">
         <form method="post" action="/dashboard/todo/store">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{isset($task) ? $task->id : ''}}">
            <div class="card-body card-padding">
               <div class="form-group">
                  <div class="fg-line">
                     <input type="text" name="title" value="{{ old('title', isset($task) ? $task->title : '')}}" class="form-control input-sm" placeholder="Input Title">
                     @if ( $errors->has('title') )
                     <p style="color:red">  {{ $errors->first('title') }} </p>
                     @endif
                  </div>
               </div>
               <div class="form-group">
                  <div class="fg-line">
                     <input type="text" name="task" value="{{ old('task', isset($task) ? $task->task : '')}}" class="form-control input-sm" placeholder="Input Task">
                     @if ( $errors->has('task') )
                     <p style="color:red">  {{ $errors->first('task') }} </p>
                     @endif
                  </div>
               </div>
               <div class="form-group">
                  <div class="fg-line">
                     <textarea class="form-control"  name="taskdetail" rows="5" placeholder="Text Detail">{{ old('taskdetail', isset($task) ? $task->taskdetail : '')}}</textarea>
                     @if ( $errors->has('taskdetail') )
                     <p style="color:red">  {{ $errors->first('taskdetail') }} </p>
                     @endif
                  </div>
               </div>
               <div class="form-group">
                  <div class="fg-line">
                    <button  type="submit" class="btn btn-info">Save Todo </button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
   </div>
</section>
@endsection
