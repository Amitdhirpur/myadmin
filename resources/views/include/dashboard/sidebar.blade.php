@php
$segment2 = Request::segment(2);
@endphp
<aside id="sidebar" class="sidebar c-overflow {{($segment2 == 'profile')? ' mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar' : ''}}">
   <div class="fluid" style="background-image: url({{ $userDetail->cover_pic }}); height:150px" > <span > <img src="{{  $userDetail->profile_pic }}" style="height:77px;padding-top: 2px;margin-left: 22px;margin-top: 47px; border-radius: 50%;" alt=""></span> </div>
   <div style="margin-top: -20px;" class="{{($segment2 == 'profile')? 'toggled ' : ''}}">
      <div data-ma-action="profile-menu-toggle"   style="background: rgba(0,0,0,.37);padding: 7px 14px; color: #fff;margin-top: 20px; position: relative;" class="sp-info">
         {{$user->name}}
         <i class="zmdi zmdi-caret-down" style="margin-left:183px"></i>
      </div>
      </a>
      <ul class="main-menu" style="display:{{($segment2 == 'profile')? ' block' : 'none'}}">
         <li>
            <a href="/dashboard/profile"><i class="zmdi zmdi-account"></i> View Profile</a>
         </li>
         <li>
            <a href=""><i class="zmdi zmdi-settings"></i> {{$user->name}}</a>
         </li>
         <li>
            <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
         </li>
      </ul>
   </div>

   <ul class="main-menu">
      <li class="sub-menu {{($segment2 == 'list' || $segment2 == 'todo')? 'active toggled' : ''}}">
         <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-chart"></i> Todo List Details</a>
         <ul  class="display: {{($segment2 == 'list' || $segment2 == 'todo')? 'block' : ''}}">
            <li><a href="/dashboard/list">Todo List</a></li>
            <li><a href="/dashboard/todo">Todo Add</a></li>
         </ul>
      </li>
   </ul>
</aside>
