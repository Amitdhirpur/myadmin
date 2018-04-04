@extends('layouts.app')
@section('content')



 <div class="lc-block toggled" id="l-login">
   <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
      {{ csrf_field() }}
    <H2 style="color:white">Send Password Reset Link</H2>
    <div class="lcb-form">
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                <input type="email" id="email" class="form-control" placeholder="Email"  name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        </div>

    <!-- <button type="submit" style="width:73%" class="btn btn-sm btn-primary btn-block">-->
        <a href="javascript:void(0)" style="height:56px;width:58px" class="btn btn-login btn-success btn-float">
          <button type="submit" style="background-color: #4fb243; border: oldlace;">
            <i class="zmdi zmdi-arrow-forward"></i>
          </button>
        </a>
    </div>

    <div class="lcb-navigation">
          <a href="/register" data-ma-action="login-switch" style="width:100px;" data-ma-block="#l-register"><p style="text-align:center;margin-top:5px ">Register</p></a>
          <a href="{{ route('password.request') }}" style="width:133px"  data-ma-action="login-switch" data-ma-block="#l-forget"><p style="text-align:center;margin-top:5px"> Forgot Password</p></a>
    </div>
  </form>
</div>
@endsection('content')
