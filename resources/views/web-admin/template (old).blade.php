<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="startup" name="descriptison">
    <meta content="startup" name="keywords">
    <meta name="robots" content="noindex,nofollow" />

    <title>Tveloper | Admin</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon/t5_32.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/favicon/t5_180.png') }}" rel="apple-touch-icon" />

    <link href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/pages/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/colors/default-dark.css') }}" id="theme" rel="stylesheet" />

  </head>

  <body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
      <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Tveloper</p>
      </div>
    </div>

    <div id="main-wrapper">

        @include('web-admin/components.header')

        @include('web-admin/components.sidebar')

        <div class="page-wrapper">

            @yield('content')

            @include('web-admin/components.footer')

        </div>

    </div>


    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/waves.js') }}"></script>
    <script src="{{ asset('assets/admin/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.min.js') }}"></script>

  </body>
</html>
