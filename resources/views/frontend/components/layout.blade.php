<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title . ' - PT Taruna Eka Setia' ?? 'PT Taruna Eka Setia' }}</title>

    {{-- CSS --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/tes_005.ico') }}">
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect">
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body>
    <main class="page-wrapper">
        <x-loader></x-loader>
        <x-navbar></x-navbar>
        {{ $slot }}
        <x-footer></x-footer>
    </main>
    <div id="container-floating">
        <div class="nd4 nds">
            <a href="https://api.whatsapp.com/send?phone=628113550723&text=I%20want%20to%20ask%20about%20boilers,%20I%20got%20this%20contact%20from%20Google%20Ads"
                target="_blank">
                <img class="reminder" src="assets/images/button/whatsapp.png" />
            </a>
        </div>

        <div class="nd3 nds">
            <a href="https://api.whatsapp.com/send?phone=628155142624&text=I%20want%20to%20ask%20about%20boilers,%20I%20got%20this%20contact%20from%20Google%20Ads"
                target="_blank">
                <img class="reminder" src="assets/images/button/whatsapp.png" />
            </a>
        </div>

        <div class="nd1 nds">
            <a href="mailto:cs@tarunaekasetia.com" target="_blank">
                <img class="reminder" src="assets/images/button/mail.png" />
            </a>
        </div>

        <div id="floating-button">
            <p class="plus">+</p>
            <img class="edit" src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
        </div>
    </div>

    <!-- Button on fixed on bottom right corner of the page -->
    <button class="scrollToTopBtn">
        <img src="assets/images/up.png" alt>
    </button>

    {{-- Javascript --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins for this template -->
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>

    <!-- Custom script for this template -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Automatically Update the Year with HTML and JavaScript -->
	<script src="{{ asset('assets/js/copyright-year-auto-update.js') }}" type="text/javascript"></script>

    <!-- Button JavaScript Libraries -->
    <script src="{{ asset('assets/js/button.js') }}"></script>

</body>

</html>
