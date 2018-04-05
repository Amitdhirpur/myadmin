@extends('layouts.dashboard')
@section('content')
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
                     <img class="img-responsive" src="{{  $userDetail->profile_pic }}" alt="">
                     </a>
                     <div class="dropdown pmop-message">
                        <a data-toggle="dropdown" href="" class="btn bgm-white btn-float z-depth-1">
                        <i class="zmdi zmdi-comment-text-alt"></i>
                        </a>
                        <div class="dropdown-menu">
                           <textarea placeholder="Write something..." name="status"></textarea>
                           <button class="btn bgm-green btn-float" name="addStatus" value="1"><i class="zmdi zmdi-mail-send"></i>
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
              @include('dashboard.profile.include.sidebar')
            </div>
            <div class="pm-body clearfix">
              @include('dashboard.profile.include.tab')

               <div class="pmb-block">
                  @include('dashboard.profile.index.summary')
               </div>
               <div class="pmb-block">
                  @include('dashboard.profile.index.basic-info')
               </div>
               <div class="pmb-block">
                  @include('dashboard.profile.index.contact-info')
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
