<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>{{ env('APP_NAME') }}</title>
    @stack('custom-css')
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('favicon.ico') }}" />
    <link href="{{ URL::asset('lib/sweetalerts2/sweetalerts2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="@yield('body-class', '')">
    <div class="loader"></div>
    <div id="wrapper" data-scrollbar style="overflow:hidden">
        @section('header-nav-bar')
            @include('frontend.layouts.header')
        @show

        <main id="main">
            @yield('content')
        </main>

        @section('footer')
            @include('frontend.layouts.footer')
        @show
    </div>
    <script src="{{ URL::asset('lib/sweetalerts2/sweetalerts2.min.js') }}"></script>
    <script type="text/javascript">
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

    @include('backend.shared.alert_messages')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ URL::asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (e) => {
            AOS.init({
                duration: 800,
                delay: 300,
            })
        })
    </script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $("a.fancybox__image").fancybox();
        });
    </script>
    @stack('custom-js')
</body>

</html>
