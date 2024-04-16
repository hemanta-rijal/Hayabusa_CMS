<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/html/semi-dark-menu/auth-boxed-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Feb 2023 08:33:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }} | @yield('title')</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

    <link href="{{ asset('css/light/loader.css') }}" rel="stylesheet" type="text/css"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('css/light/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/dark/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/light/authentication/auth-boxed.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <script src="{{ asset('js/loader.js') }}"></script>
</head>
<body class="form">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

    @yield('content')

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

</body>
</html>
