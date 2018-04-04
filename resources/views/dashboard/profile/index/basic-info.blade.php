<div class="pmbb-header">
   <h2><i class="zmdi zmdi-account m-r-10"></i> Basic Information</h2>
   <ul class="actions">
      <li class="dropdown">
         <a href="" data-toggle="dropdown">
         <i class="zmdi zmdi-more-vert"></i>
         </a>
         <ul class="dropdown-menu dropdown-menu-right">
            <li>
               <a data-ma-action="profile-edit" href="">Edit</a>
            </li>
         </ul>
      </li>
   </ul>
</div>
<div class="pmbb-body p-l-30">
   <div class="pmbb-view">
      <dl class="dl-horizontal">
         <dt>Full Name</dt>
         <dd>{!! $user->name !!}</dd>
      </dl>
      <dl class="dl-horizontal">
         <dt>Gender</dt>
         <dd>{!!isset($userDetail)? $userDetail->gender : '' !!}</dd>
      </dl>
      <dl class="dl-horizontal">
         <dt>Birthday</dt>
         <dd>{!! isset($userDetail)? $userDetail->birthday : '' !!}</dd>
      </dl>
      <dl class="dl-horizontal">
         <dt>Martial Status</dt>
         <dd>{!! isset($userDetail)? $userDetail->marital_status : '' !!}</dd>
      </dl>
   </div>
   <div class="pmbb-edit">
      <dl class="dl-horizontal">
         <dt class="p-t-10">Full Name</dt>
         <dd>
            <div class="fg-line">
               <input type="text" name="name" class="form-control"
                  value="{{old('name',($user) ? $user->name : '')}}">
            </div>
         </dd>
      </dl>
      <dl class="dl-horizontal">
         <dt class="p-t-10">Gender</dt>
         <dd>
            <div class="fg-line">
               <select class="form-control"  name="gender">

                  <option value="male" @if($userDetail && $userDetail->gender == 'male'){{'selected'}} @else {{''}} @endif >Male</option>
                  <option value="female" @if($userDetail && $userDetail->gender == 'female'){{'selected'}} @else {{''}} @endif >Female</option>
                  <option value="other" @if($userDetail && $userDetail->gender == 'other'){{'selected'}} @else {{''}} @endif >Other</option>
               </select>
            </div>
         </dd>
      </dl>
      <dl class="dl-horizontal">
         <dt class="p-t-10">Birthday</dt>
         <dd>
            <div class="dtp-container dropdown fg-line">
               <input type='text'  name="birthday" class="form-control date-picker"
                  data-toggle="dropdown"   value="{{old('birthday',($userDetail) ? $userDetail->birthday : '')}}">
            </div>
         </dd>
      </dl>
      <dl class="dl-horizontal">
         <dt class="p-t-10">Martial Status</dt>
         <dd>
            <div class="fg-line">
               <select class="form-control"  name="martial_status">
                  <option value="single" @if($userDetail && $userDetail->martial_status == 'single'){{'selected'}} @else {{''}} @endif>Single</option>
                  <option value="married" @if($userDetail && $userDetail->martial_status == 'married'){{'selected'}} @else {{''}} @endif>Married</option>
                  <option value="other" @if($userDetail && $userDetail->martial_status == 'other'){{'selected'}} @else {{''}} @endif>Other</option>
               </select>
            </div>
         </dd>
      </dl>
      <div class="m-t-30">
         <button class="btn btn-primary btn-sm" name="basic" value="1" >Save</button>
         <button data-ma-action="profile-edit-cancel" class="btn btn-link btn-sm">Cancel</button>
      </div>
   </div>
</div>
