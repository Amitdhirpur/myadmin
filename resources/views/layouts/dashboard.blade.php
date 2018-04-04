<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Vendor CSS -->
        <link href="/assets/old/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="/assets/old/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="/assets/old/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="/assets/old/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link rel="/assets/old/stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link href="/assets/old/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="/assets/old/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="/assets/old/vendors/bower_components/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet">
         <link href="/assets/old/vendors/bower_components/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="/assets/old/css/app_1.min.css" rel="stylesheet">
        <link href="/assets/old/css/app_2.min.css" rel="stylesheet">

        <style>
          .upload-button {
            padding: 10px;
            display: block;
            float: left;
          }

          .file-upload {
            display: none !important;
          }
        </style>


    </head>
    <body>
        <header id="header" class="clearfix" data-ma-theme="blue">

          @include('include.dashboard.header')

        </header>

        <section id="main">

          @php $segment1 = Request::segment(1); @endphp

          @if($segment1 != '')
            @include('include.dashboard.sidebar')
          @endif

          @yield('content')

        </section>

          @include('include.dashboard.footer')

          <script src="/assets/old/vendors/bower_components/jquery/dist/jquery.min.js"></script>

          <script src="/assets/old/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

          <script src="/assets/old/vendors/bower_components/flot/jquery.flot.js"></script>
          <script src="/assets/old/vendors/bower_components/flot/jquery.flot.resize.js"></script>
          <script src="/assets/old/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
          <script src="/assets/old/vendors/sparklines/jquery.sparkline.min.js"></script>
          <script src="/assets/old/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

          <script src="/assets/old/vendors/bower_components/moment/min/moment.min.js"></script>
          <script src="/assets/old/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
          <script src="/assets/old/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
          <script src="/assets/old/vendors/bower_components/Waves/dist/waves.min.js"></script>
          <script src="/assets/old/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
          <script src="/assets/old/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
          <script src="/assets/old/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="/assets/old/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
           <script src="/assets/old/vendors/bower_components/lightgallery/lib/lightgallery-all.min.js"></script>
          <script src="/assets/old/vendors/bower_components/dropzone/dist/min/dropzone.min.js"></script>
          <script src="/assets/old/js/app.min.js"></script>

          @yield('script')

          </body>
        </html>
