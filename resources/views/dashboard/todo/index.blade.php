@extends('layouts.dashboard')
@section('content')
<section id="content">
   <div class="container">
      <form action="/dashboard/todo/update" method="get">
         <div class="block-header">
            <div class="row">
               <div class="col-md-10">
                  <h2>Todo Table</h2>
               </div>
               <div class="col-md-1">
                  <button  type="submit" class="btn btn-danger" id="delete-btn" role="button" style="display:none;" name="deleteall" value="Delete">Delete</button>
               </div>
               <div class="col-md-1">
                  <a href="/dashboard/todo" class="btn btn-success" style="padding: 6px 22px 6px 22px;" role="button">Add</a>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="table-responsive">
               <table id="data-table-basic" class="table table-striped">
                  <thead>
                     <tr>
                        <th><input type="checkbox" class="selectAll" ></th>
                        <th>date</th>
                        <th  colspan="2" style="text-align:center">Description</th>
                        <th>Status</th>
                        <th colspan="2">Action</th>
                     </tr>
                  </thead>
                  <tfoot>
                  </tfoot>
                  <tbody>
                     @foreach($tasks as $task)
                     <tr>
                        <td><input type="checkbox" name="id[]" class="check" value="{{$task->id}}"></td>
                        <td>{{$task->created_at}}</td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->taskdetail}}</td>
                        <td>
                            <a href="{{'/dashboard/todo/update/'.'?id[]='.$task->id.'&updateStatus=true&status='. ($task->status ? 0 : 1) }}"  class="btn {{ $task->status ? 'btn-danger' : 'btn-info'}} btn-sm">
                              {{ $task->status ? 'Mark Incomplete' : 'Mark Completed'}}
                            </a>
                        </td>
                        <td><a href="{{'/dashboard/todo/'.$task->id}}">Edit</a></td>
                        <td><a href="{{'/dashboard/todo/'.$task->id.'/delete'}}">Delete</a></td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </form>
   </div>
</section>
@endsection
@section('script')
<script type="text/javascript">

   showHideDelete();

   $('.selectAll').on('click',function(){
     checkBox = true;
     if(!this.checked) checkBox = false;

     $('.check').each(function(){
       this.checked = checkBox;
     });
     showHideDelete();
   });

   $('.check').on('click',function(){
       $('.selectAll').prop('checked',false);
     showHideDelete()
   });

   function showHideDelete() {

     if($('.check:checked').length > 0)
       $('#delete-btn').show();
     else
       $('#delete-btn').hide();
   }

</script>
@endsection
