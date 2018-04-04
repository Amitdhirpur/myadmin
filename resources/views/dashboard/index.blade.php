@extends('layouts.dashboard')
@section('content')
<section id="content">
    <div class="container">
      <div class="card-header ch-alt">
          <h2>Todo Lists</h2>
      </div>
        <div class="row">

        <div class="col-sm-6">

            <div id="todo" class="card card-light">
                <div class="card-body card-padding">
                    <div class="t-add">
                        <i class="ta-btn zmdi zmdi-plus" data-ma-action="todo-form-open"></i>
                        <form method="post" id="todo-form" action="/dashboard/todo/storelist">
                          {{ csrf_field() }}
                        <div class="ta-block">
                            <textarea placeholder="Task..." name="title"></textarea>

                            <div class="tab-actions">
                                <a data-ma-action="todo-form-close" href="" class="c-red"><i class="zmdi zmdi-close"></i></a>
                                <a data-ma-action="todo-form-close" class="c-green" onclick="event.preventDefault(); document.getElementById('todo-form').submit();"><i class="zmdi zmdi-check"></i></a>
                            </div>
                        </div>
                      </form>
                    </div>
                   @foreach($tasks as $task)
                    <div class="list-group">
                      <div class="list-group-item media">
                            <div class="pull-right">
                                <ul class="actions actions-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{'/dashboard/todo/'.$task->id.'/delete'}}">Delete</a></li>
                                            <li><a href="{{'/dashboard/todo/'.$task->id}}">Edit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="media-body">
                                <div class="checkbox checkbox-light">
                                    <label>
                                        <input type="checkbox" class="mark-task" data-href="{{'/dashboard/todo/update/'.'?id[]='.$task->id.'&updateStatus=true&status='. ($task->status ? 0 : 1) }}" data-id="{{$task->id}}" {{$task->status ? 'checked': ''}}>
                                        <i class="input-helper"></i>
                                        <span>
                                          {{ $task->title}}
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        </div>
    </div>
</section>
@endsection
@section('script')
  <script>
    $('.mark-task').change(function() {
        var href = $(this).data('href');
        window.location.href = href;
     });
  </script>
@endsection
