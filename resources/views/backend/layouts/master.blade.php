<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts.header')
</head>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen" style="display: block">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

     @include('backend.layouts.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

         @include('backend.layouts.sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    @yield('page-title-breadcrumb')

                    <div class="row layout-top-spacing">
                        @yield('content')
                    </div>

                </div>

            </div>

            @include('backend.layouts.footer')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('js/waves/waves.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('lib/sweetalerts2/sweetalerts2.min.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @stack('custom-js')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    @include('backend.shared.alert_messages')
</body>

</html>
