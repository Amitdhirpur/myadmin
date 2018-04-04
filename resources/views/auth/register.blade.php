@extends('layouts.app')
@section('content')

   <div class="block" style="max-width: 500px; padding: 20px 0; width: 80%; position: relative; z-index: 10;vertical-align: middle;display: inline-block;">
    <H2 style="color:white">Register</H2>
      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
        <div class="lcb-form"style="padding: 35px 55px 35px 25px;">
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                <div class="fg-line">
                  <input id="name" type="text" placeholder="username" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
            </div>
            </div>
           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                <div class="fg-line">
                  <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                <div class="fg-line">
                  <input id="password" type="password" placeholder="password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
            </div>
          </div>
          <div class="form-group">
          <div class="input-group m-b-20">
              <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
              <div class="fg-line">
                  <input id="password-confirm" type="password" placeholder="confirm-password" class="form-control" name="password_confirmation" required>
              </div>
          </div>
          </div>
          <a href="javascript:void(0)" style="top: 50%; margin-top: -43px; right: -25px;width: 54px;height: 53px;" class="btn btn-login btn-success btn-float"><button type="submit" style="background-color: #4fb243; border: oldlace;padding:0"><i class="zmdi zmdi-check"></i></button></a>
              </div>

              <div class="lcb-navigation">
                <a href="/login" data-ma-action="login-switch" style="width:100px;" data-ma-block="#l-register"><p style="text-align:center;margin-top:5px ">login</p></a>
              </div>
      </form>
    </div>
    @endsection('content')
