<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name') }} | @yield('title')</title>
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />

<link href="{{ asset('css/light/loader.css') }}" rel="stylesheet" type="text/css" />

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('lib/sweetalerts2/sweetalerts2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@stack('custom-styles')
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

<script src="{{ asset('js/loader.js') }}"></script>
