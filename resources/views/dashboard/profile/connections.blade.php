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
                     <img src="{{  $userDetail->profile_pic }}" alt="">
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
               @include('dashboard.profile.include.sidebar')
            </div>
            <div class="pm-body clearfix">
               @include('dashboard.profile.include.tab')
               <div class="pmb-block">
                  <div class="p-header">
                     <ul class="p-menu">
                        <li class="active"><a href=""><i class="zmdi zmdi-accounts-add hidden-xs"></i>
                           Recommanded</a>
                        </li>
                        <li><a href=""><i class="zmdi zmdi-accounts hidden-xs"></i> Connected</a></li>
                        <li class="pm-search">
                           <div class="pms-inner">
                              <i class="zmdi zmdi-search"></i>
                              <input type="text" placeholder="Search...">
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="contacts c-profile clearfix row">
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/1.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Cathy Shelton</strong>
                              <small>cathy.shelton31@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/2.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Stella Flores</strong>
                              <small>stella@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/3.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Marilyn Thomas</strong>
                              <small>marilyn@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/4.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Dwight Gilbert</strong>
                              <small>dwight@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/5.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Cody Moreno</strong>
                              <small>moreno@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/6.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Jamie Freeman</strong>
                              <small>freeman@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/7.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Charles Spencer</strong>
                              <small>charles@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/8.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Vickie Reed</strong>
                              <small>reed@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/9.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Lauren Ruiz</strong>
                              <small>ruiz@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/10.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Marlene Vasquez</strong>
                              <small>vasquez@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/11.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Loretta Morrisonz</strong>
                              <small>morrisonz@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/12.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Yvonne Wood</strong>
                              <small>wood@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/13.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Denise Franklin</strong>
                              <small>franklin@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/14.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Joseph Gonzalez</strong>
                              <small>gonzalez@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/15.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Rick Graham</strong>
                              <small>graham@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="c-item">
                           <a href="" class="ci-avatar">
                           <img src="/assets/img/demo/contacts/16.jpg" alt="">
                           </a>
                           <div class="c-info">
                              <strong>Alexander Bailey</strong>
                              <small>bailey@example.com</small>
                           </div>
                           <div class="c-footer">
                              <button class="waves-effect"><i class="zmdi zmdi-face-add"></i> Add
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="load-more">
                     <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load More...</a>
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
