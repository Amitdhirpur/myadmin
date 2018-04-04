<div class="pmbb-header">
    <h2><i class="zmdi zmdi-equalizer m-r-10"></i> Summary</h2>

    <ul class="actions">
        <li class="dropdown">
            <a href="" data-toggle="dropdown">
                <i class="zmdi zmdi-more-vert"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a data-ma-action="profile-edit">Edit</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="pmbb-body p-l-30">
    <div class="pmbb-view">
      {!! isset($userDetail)? $userDetail->about: '' !!}
    </div>

    <div class="pmbb-edit">
        <div class="fg-line">
            <textarea class="form-control" name="about" rows="5" placeholder="Summary...">{!!isset($userDetail)? $userDetail->about:'' !!}</textarea>
        </div>
        <div class="m-t-10">
            <button class="btn btn-primary btn-sm" name="summary" value="1">Save</button>
            <button data-ma-action="profile-edit-cancel" class="btn btn-link btn-sm">Cancel</button>
        </div>
    </div>
</div>
