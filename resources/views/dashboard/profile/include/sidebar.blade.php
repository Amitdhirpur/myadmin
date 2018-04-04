<div class="pmo-block pmo-contact hidden-xs">
   <h2>Contact</h2>
   <ul>
      <li><i class="zmdi zmdi-phone"></i> {!! isset($userDetail)? $userDetail->mobile : '' !!}</li>
      <li><i class="zmdi zmdi-email"></i> {!! $user->email !!}</li>
      <li><i class="zmdi zmdi-facebook-box"></i> {!!isset($userDetail)? $userDetail->skype: '' !!}</li>
      <li><i class="zmdi zmdi-twitter"></i> {!! isset($userDetail)? $userDetail->twitter: '' !!}</li>
      <li>
         <i class="zmdi zmdi-pin"></i>
         <address class="m-b-0 ng-binding">
            {!!isset($userDetail)? $userDetail->address: '' !!}
         </address>
      </li>
   </ul>
</div>
<div class="pmo-block pmo-items hidden-xs">
   <h2>Connections</h2>
   <div class="pmob-body">
      <div class="row">
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/1.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/2.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/3.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/4.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/5.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/6.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/7.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/8.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/1.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/2.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/3.jpg" alt="">
         </a>
         <a href="" class="col-xs-2">
         <img class="img-circle" src="/assets/old/img/demo/profile-pics/4.jpg" alt="">
         </a>
      </div>
   </div>
</div>
