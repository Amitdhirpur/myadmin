@extends('layouts.dashboard')
@section('content')
<section id="content">
  <div class="container container-alt">
  @include('dashboard.profile.include.header')
  <form method="post" action="/dashboard/profile/store" enctype="multipart/form-data">
     {{ csrf_field() }}
  <div class="card c-timeline" id="profile-main">
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

      <div class="pm-body clearfix">
        @include('dashboard.profile.include.tab')
          <div class="timeline">

            @include('dashboard.profile.timeline.text')
              @include('dashboard.profile.timeline.image')

              @include('dashboard.profile.timeline.video')

               @include('dashboard.profile.timeline.images')

              <div class="clearfix"></div>

              <div class="load-more">
                  <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load More...</a>
              </div>
          </div>
      </div>
    </div>
  </div>
</form>
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
