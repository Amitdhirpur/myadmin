<div class="block-header">
   <h2>   {{ $user->name }}
      <small>{!!isset($userDetail)? $userDetail->position: '' !!}</small>
   </h2>
   <ul class="actions m-t-20 hidden-xs">
      <li class="dropdown">
         <a href="" data-toggle="dropdown">
         <i class="zmdi zmdi-more-vert"></i>
         </a>
         <ul class="dropdown-menu dropdown-menu-right">
            <li>
               <a href="">Privacy Settings</a>
            </li>
            <li>
               <a href="">Account Settings</a>
            </li>
            <li>
               <a href="">Other Settings</a>
            </li>
         </ul>
      </li>
   </ul>
</div>
