@extends('layouts.dashboard')
@section('content')
@php
$segm2 = Request::segment(2);
$segm3 = Request::segment(3);
@endphp
<section id="content">
   <div class="container container-alt">
      @include('dashboard.profile.include.header')
      <div class="card" id="profile-main">
         <form method="post" action="/dashboard/profile/store" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="pm-overview c-overflow">
               <div class="pmo-pic">
                  <div class="p-relative">
                     <a href="">
                     <img class="/assets/img-responsive" src="{{  $userDetail->profile_pic }}" alt="">
                     </a>
                     <div class="dropdown pmop-message">
                        <a data-toggle="dropdown" href="" class="btn bgm-white btn-float z-depth-1">
                        <i class="zmdi zmdi-comment-text-alt"></i>
                        </a>
                        <div class="dropdown-menu">
                           <textarea placeholder="Write something..."></textarea>
                           <button class="btn bgm-green btn-float"><i class="zmdi zmdi-mail-send"></i>
                           </button>
                        </div>
                     </div>
                     @include('dashboard.profile.include.uploadimage')
                  </div>
                  <div class="pmo-stat">
                     <h2 class="m-0 c-white">1562</h2>
                     Total Connections
                  </div>
               </div>
               <div class="pmo-block pmo-contact hidden-xs">
                  <h2>Contact</h2>
                  <ul>
                     <li><i class="zmdi zmdi-phone"></i> 00971 12345678 9</li>
                     <li><i class="zmdi zmdi-email"></i> malinda-h@gmail.com</li>
                     <li><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
                     <li><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
                     <li>
                        <i class="zmdi zmdi-pin"></i>
                        <address class="m-b-0 ng-binding">
                           44-46 Morningside Road,<br>
                           Edinburgh,<br>
                           Scotland
                        </address>
                     </li>
                  </ul>
               </div>
               @include('dashboard.profile.include.sidebar')
            </div>
         </form>
         <div class="pm-body clearfix">
            @include('dashboard.profile.include.tab')
            <div class="card">
              <div class="pmb-block clearfix photos">
                 <div class="p-header">
                    <ul class="p-menu">
                       <li class="{{ $segm3 == 'photos' || $segm3 == 'connections' ? '' : 'active'}}"><a href="/dashboard/profile/photos"><i class="zmdi zmdi-image"></i> Photos</a></li>
                       <li class="{{ $segm3 == 'videos' || $segm3 == 'connections' ? '' : 'active'}}"><a href="/dashboard/profile/videos"><i class="zmdi zmdi-play-circle"></i> Videos</a></li>
                    </ul>
                 </div>
                 <a type="button" href="/dashboard/profile/photos/upload"  class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-plus"></i></a>
              </div>
               <div class="card-body card-padding">
                  <h4>Upload Multiple Image and videos.</h4>
                  <form class="dropzone"  id="dropzone-upload">
                     {!! csrf_field() !!}
                  </form>
               </div>
            </div>
            <div class="pmb-block clearfix photos">
               <div class="p-header">
                  <ul class="actions m-t-20 hidden-xs">
                     <a href="/dashboard/profile/photos" style="width:60px" type="button" class="btn btn-primary">Back</a>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
@endsection
@section('script')
<script>
   $('.file-upload').on('change', function(e) {
     readURL(this);
   });

   Dropzone.options.uploadWidget = {
   init: function() {
    this.on('success', function( file, resp ){
       alert("Success");
    });
   },
   };

   $(".upload-image").on('click', function() {
      $(".file-upload").click();
   });

   var readURL = function(input) {
     if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
             $('.mCS_img_loaded').attr('src', e.target.result);
         }

         reader.readAsDataURL(input.files[0]);
     }
   }


</script>
@endsection
