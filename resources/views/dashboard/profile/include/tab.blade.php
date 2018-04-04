@php
$segm2 = Request::segment(2);
$segm3 = Request::segment(3);
 @endphp
<ul class="tab-nav tn-justified">
   <li class="{{$segm3 == 'timeline' || $segm3 == 'photos' || $segm3 == 'connections' ? '' : 'active'}}"><a href="/dashboard/profile">About</a></li>
   <li class="{{$segm3 == 'timeline' ? 'active' : ''}}"><a href="/dashboard/profile/timeline">Timeline</a></li>
   <li class="{{$segm3 == 'photos' ? 'active' : ''}}"><a href="/dashboard/profile/photos">Photos</a></li>
   <li class="{{$segm3 == 'connections' ? 'active' : ''}}"><a href="/dashboard/profile/connections">Connections</a></li>
</ul>
