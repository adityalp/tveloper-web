<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Tveloper | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="startup" name="descriptison">
    <meta content="startup" name="keywords">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon/t5_32.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/favicon/t5_180.png') }}" rel="apple-touch-icon" />

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('assets/admin/vendor/sweetalert2/dist/sweetalert2.min.js') }}"
        rel="stylesheet">
    <!-- Notyf -->
    <link type="text/css" href="{{ asset('assets/admin/vendor/notyf/notyf.min.css') }}" rel="stylesheet">
    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets/admin/css/volt.css') }}" rel="stylesheet">

</head>

<body>

    @include('web-admin.components.header-mobile')

    @include('web-admin.components.sidebar')

    <main class="content">

        @include('web-admin.components.header')

        @yield('content')

        {{-- @include('web-admin.components.footer') --}}

    </main>

    <!-- Core -->
    <script src="{{ asset('assets/admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Vendor JS -->
    <script src="{{ asset('assets/admin/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <!-- Slider -->
    <script src="{{ asset('assets/admin/vendor/nouislider/dist/nouislider.min.js') }}"></script>
    <!-- Smooth scroll -->
    <script src="{{ asset('assets/admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Sweet Alerts 2 -->
    <script src="{{ asset('assets/admin/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <!-- Notyf -->
    <script src="{{ asset('assets/admin/vendor/notyf/notyf.min.js') }}"></script>
    <!-- Simplebar -->
    <script src="{{ asset('assets/admin/vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <!-- Volt JS -->
    <script src="{{ asset('assets/admin/js/volt.js') }}"></script>

</body>

</html>
