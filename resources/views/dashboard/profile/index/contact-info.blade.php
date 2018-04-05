<div class="pmbb-header">
    <h2><i class="zmdi zmdi-phone m-r-10"></i> Contact Information</h2>

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
            <dt>Mobile Phone</dt>
            <dd>{!!isset($userDetail)? $userDetail->mobile : '' !!}</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Address</dt>
            <dd>{!!isset($userDetail)? $userDetail->address : '' !!}</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Email Address</dt>
            <dd>{!!isset($userDetail)? $user->email : '' !!}</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Twitter</dt>
            <dd>{!!isset($userDetail)? $userDetail->twitter : '' !!}</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Skype</dt>
            <dd>{!!isset($userDetail)? $userDetail->skype : '' !!}</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Position</dt>
            <dd>{!!isset($userDetail)? $userDetail->position : '' !!}</dd>
        </dl>
    </div>

    <div class="pmbb-edit">
        <dl class="dl-horizontal">
            <dt class="p-t-10">Mobile Phone</dt>
            <dd>
                <div class="fg-line">
                    <input type="text" name="mobile" class="form-control"
                            value="{{old('mobile',($userDetail) ? $userDetail->mobile : '')}}">
                </div>
            </dd>
        </dl>
        <dl class="dl-horizontal">
            <dt class="p-t-10">Address</dt>
            <dd>
                <div class="fg-line">
                    <input type="text" name="address" class="form-control"
                             value="{{old('address',($userDetail) ? $userDetail->address : '')}}">
                </div>
            </dd>
        </dl>
        <dl class="dl-horizontal">
            <dt class="p-t-10">Email Address</dt>
            <dd>
                <div class="fg-line">
                    <input type="email" name="email" class="form-control"
                            value="{{old('email',($user) ? $user->email : '')}}">
                </div>
            </dd>
        </dl>
        <dl class="dl-horizontal">
            <dt class="p-t-10">Twitter</dt>
            <dd>
                <div class="fg-line">
                    <input type="text" name="twitter" class="form-control"   value="{{old('twitter',($userDetail) ? $userDetail->twitter : '')}}">
                </div>
            </dd>
        </dl>
        <dl class="dl-horizontal">
            <dt class="p-t-10">Skype</dt>
            <dd>
                <div class="fg-line">
                    <input type="text" name="skype" class="form-control"  value="{{old('skype',($userDetail) ? $userDetail->skype : '')}}">
                </div>
            </dd>
        </dl>
        <dl class="dl-horizontal">
            <dt class="p-t-10">Postion</dt>
            <dd>
                <div class="fg-line">
                    <input type="text" name="position" class="form-control"  value="{{old('position',($userDetail) ? $userDetail->position : '')}}">
                </div>
            </dd>
        </dl>
        <dl class="dl-horizontal">
            <dt class="p-t-10">Upload Cover Photo</dt>
            <dd>
                <div class="fg-line">
                       <input type="file" name="cover_image" >
                </div>
            </dd>
        </dl>

        <div class="m-t-30">
            <button class="btn btn-primary btn-sm" name="contact" value="1">Save</button>
            <button data-ma-action="profile-edit-cancel" class="btn btn-link btn-sm">Cancel</button>
        </div>

    </div>
</div>
