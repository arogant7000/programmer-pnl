<!DOCTYPE html>
<html>
  <head>

    <title>@yield('title')</title>

    <!-- DEFAULT META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400italic,700italic" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" id="default-style-css"  href="{{ asset('files/css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="fontawesome-style-css" href="{{ asset('files/css/font-awesome.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="ionic-icons-style-css" href="{{ asset('files/css/ionicons.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="owlcarousel-css" href="{{ asset('files/css/owl.carousel.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="isotope-style-css"  href="{{ asset('files/css/isotope.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" id="mqueries-style-css"  href="{{ asset('files/css/mqueries.css')}}" type="text/css" media="all" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('files/uploads/favicon.png')}}"/>


          @yield('styles')

          <!-- Scripts -->
          <script>
              window.Laravel = <?php echo json_encode([
                  'csrfToken' => csrf_token(),
              ]); ?>
          </script>
  </head>
  <body>

  <!-- PAGELOADER -->
  <div id="page-loader">
  	<div class="page-loader-inner">
       	<span class="loader-figure"></span>
          <img class="loader-logo" src="{{ asset('files/uploads/logo-sudo-scroll.png')}}" srcset="files/uploads/logo-sudo-scroll.png 1x, files/uploads/logo-sudo-scroll@2x.png 2x" alt="Loader Logo">
  	</div>
  </div>
  <!-- PAGELOADER -->

  <!-- PAGE CONTENT -->
  <div id="page-content">

    @yield('header')

    @yield('content')
    @include('partials.footer')

  </div> <!-- END #page-content -->
  <!-- PAGE CONTENT -->


  <!-- SCRIPTS -->
  <script src="{{ asset('files/js/jquery-2.1.4.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('files/js/jquery.easing.1.3.js')}}"></script>
  <script type="text/javascript" src="{{ asset('files/js/jquery.visible.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('files/js/tweenMax.js')}}"></script>
  <script type="text/javascript" src="{{ asset('files/js/jquery.backgroundparallax.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('files/js/jquery.owl.carousel.js')}}"></script>
  <script type="text/javascript" src="{{ asset('files/js/jquery.isotope.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('files/js/jquery.imagesloaded.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('files/js/script.js')}}"></script>
  <!-- SCRIPTS -->
    @yield('script')

  </body>
</html>
