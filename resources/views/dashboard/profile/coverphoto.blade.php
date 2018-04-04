@extends('layouts.dashboard')
@section('content')
<section id="content">
   <div class="container container-alt">
      <div class="card" id="profile-main">
         <div class="pm-overview c-overflow">
            <div class="pmo-pic">
               <form method="post" action="/dashboard/profile/store" enctype="multipart/form-data">
                  {{ csrf_field() }}
                       <div class="well">
                     <span class="hidden-xs upload-image"><i class="zmdi zmdi-camera"></i> Update Profile Picture</span>
                    <br/> <button class="btn btn-primary btn-sm" name="uploadImage" value="1">Save</button>
                      <input type="file" name="image" id="uploadImage" class="file-upload" ><br/>
                    </div>
                    <div class="well">
                      <span class="hidden-xs upload-image" ><i class="zmdi zmdi-camera"></i> Update cover Picture</span>
                     <br/> <button class="btn btn-primary btn-sm" name="uploadCover" value="1">Save</button>
                       <input type="file" name="image" id="uploadCover" class="file-upload" >
                     </div>
               </form>
            </div>
         </div>

         <div class="pm-body clearfix">
            <div class="pmb-block clearfix photos">
               <div class="p-header">
                  <ul class="actions m-t-20 hidden-xs">
                     <a href="/dashboard/profile/photos" style="width:60px" type="button" class="btn btn-primary">Back</a>
                  </ul>
               </div>
            </div>
            <div class="lightbox">
               <div data-src="/assets/old/media/gallery/1.jpg" style=" padding-left:7px !important; padding-right: 0px !important; height: 124px !important;" class="col-md-3 col-sm-4 col-xs-6">
                  <div class="lightbox-item p-item">
                     <img src="/assets/old/media/gallery/thumbs/1.jpg"  alt=""/>
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
