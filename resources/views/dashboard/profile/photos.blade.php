@extends('layouts.dashboard')
@section('content')
<style>
   .lightbox-item{
   max-height: 119px;
   margin-top: 5px;
   }
   .hide-button{
   opacity: 0;
   }
   .hide-button:hover{
   opacity: 1;
   }
</style>
@php
$segm2 = Request::segment(2);
$segm3 = Request::segment(3);
@endphp
<section id="content">
   <div class="container container-alt">
      @include('dashboard.profile.include.header')
      <form method="post" action="/dashboard/profile/store" enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="card" id="profile-main">
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
                     <div class="pmop-edit" style="cursor:pointer;">
                        <span class="hidden-xs upload-image"><i class="zmdi zmdi-camera"></i> Update Profile Picture</span>
                        <button class="btn btn-primary btn-sm" name="uploadImage" value="1">Save</button>
                     </div>
                     <input type="file" name="image" id="uploadImage" class="file-upload" >
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
            <div class="pm-body clearfix">
               @include('dashboard.profile.include.tab')
               <div class="pmb-block clearfix photos">
                  <div class="p-header">
                     <ul class="p-menu">
                        <li class="{{ $segm3 == 'photos' || $segm3 == 'connections' ? '' : 'active'}}"><a href="/dashboard/profile/photos"><i class="zmdi zmdi-image"></i> Photos</a></li>
                        <li class="{{ $segm3 == 'videos' || $segm3 == 'connections' ? '' : 'active'}}"><a href="/dashboard/profile/videos"><i class="zmdi zmdi-play-circle"></i> Videos</a></li>
                        <li class="{{ $segm3 == 'albums' || $segm3 == 'connections' ? '' : 'active'}}"><a href=""><i class="zmdi zmdi-collection-image"></i> Albums</a></li>
                     </ul>
                     <ul class="actions m-t-20 hidden-xs">
                        <li class="dropdown" dropdown>
                           <a href="" dropdown-toggle>
                           <i class="zmdi zmdi-more-vert"></i>
                           </a>
                           <ul class="dropdown-menu dropdown-menu-right">
                              <li>
                                 <a href="">Refresh</a>
                              </li>
                              <li>
                                 <a href="">Settings</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <a type="button" href="/dashboard/profile/photos/upload"  class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-plus"></i></a>
               </div>
               <div class="lightbox">
                  @foreach($images as $image)
                  <div data-src="{{ $image->image_path }}" style=" padding-left:7px !important; padding-right: 0px !important; height: 124px !important;" class="col-md-3 col-sm-4 col-xs-6">
                     <div class="lightbox-item p-item">
                        <img src="{{ $image->image_path }}"  alt=""/>
                     </div>
                     <div class="hide-button" style="position: absolute;bottom: 12px;left: 32px;">
                        <a type="button" href="/dashboard/profile/photos/{{$image->id}}" class="btn btn-sm btn-success cover-pic-btn">Change Cover</a>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="load-more m-t-30">
               <div class="row">
                  <div class="col-md-8">
                  </div>
                  <div class="col-md-4">
                     {{ $images  ->links() }}
                  </div>
               </div>
            </div>
         </div>
   </div>
   </form>
   </div>
</section>
@endsection
@section('script')
<script>
   $('.file-upload').on('change', function(e) {
     readURL(this);
   });


   $('a.cover-pic-btn').click(function(){
    window.location.href=this.href;
     return false;
   });


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
