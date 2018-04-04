@extends('layouts.dashboard')
@section('title','Home')
@section('content')
  <section id="content" style="padding:0;">
      <div class="container">

          <div class="row">
              <div class="col-sm-6">
                  <div class="card" id="calendar-widget">
                      <div class="card-header bgm-teal">
                          <div class="cwh-year"></div>
                          <div class="cwh-day"></div>

                          <button class="bgm-lightgreen btn btn-default bg btn-float"><i class="zmdi zmdi-plus"></i></button>
                      </div>

                      <div class="card-body card-padding-sm">
                          <div id="cw-body"></div>
                      </div>
                  </div>
                </div>
            </div>
      </div>
  </section>
@endsection
