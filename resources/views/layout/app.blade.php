<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator</title>

    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css">

    <script src="{{ asset('js/head.js') }}"></script>
</head>
<body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

    <!-- Begin page -->
    <div id="wrapper">
        @include('layout.partials.navbar')
        @include('layout.partials.side-menu')

        <div class="content-page">
            <div class="content">
                @yield('content')
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="">Coderthemes</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('libs/selectize/js/standalone/selectize.min.js') }}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{ asset('js/pages/dashboard-1.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('js/app.min.js') }}"></script>

</body>
</html>
