<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/admin/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/admin/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/admin/img/favicons/manifest.json') }}">

    <script src="{{ asset('assets/admin/js/config.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>
    <link href="{{ asset('assets/admin/vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/admin/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/admin/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/admin/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>
  <body>
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        @include('layouts.navigation')
        <div class="content">
          @yield('contents')
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.4.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('assets/admin/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('assets/admin/polyfill/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
    <script src="{{ asset('assets/admin/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/theme.js') }}"></script>
  </body>
</html>
