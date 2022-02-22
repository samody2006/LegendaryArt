<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Legendary Art | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/lightgallery.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">

  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>

        @include('frontend.layouts.partials.header')



    @yield('content')

      <div class="footer py-4">
    <div class="container-fluid">
      <p style="text-align: center">
          © <?php
          $copyYear = 2020; // Set your website start date
          $curYear = date('Y'); // Keeps the second year updated
          echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
          ?> <a href="https://legendaryart.space" target="_blank" >Legendary Art</a>,

     {!! setting('site_copyright') !!}
      </p>
    </div>
  </div>





  </div>

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js/swiper.min.js')}}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>

  <script src="{{ asset('js/picturefill.min.js') }}"></script>
  <script src="{{ asset('js/lightgallery-all.min.js') }}"></script>
  <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>

  <script src="{{ asset('js/main.js') }}"></script>

  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>

  </body>
</html>
