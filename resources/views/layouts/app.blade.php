<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/Feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/flickity/dist/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/flickity-fade/flickity-fade.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/jarallax/dist/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/highlightjs/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">

      <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Map -->
    {{-- <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' /> --}}



<script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <title>@yield('title')</title>
  </head>
  <body>

    @include('site.incs.header')
    
    @yield('content')

    @include('site.incs.footer')


       <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flickity-fade/flickity-fade.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/dist/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/dist/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('assets/libs/typed.js/lib/typed.min.js') }}"></script>
    <script src="{{ asset('assets/libs/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>

    <!-- Map -->
    {{-- <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script> --}}

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG9ua2FndW5pbGEiLCJhIjoiY2sycGl0czBhMDRlMTNpcWI4em45cThhZyJ9.97Vlu03zI5vG-1YgQ_0SdQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/light-v10',
            center: [39.2083,-6.7695712],
            zoom: 9,
            pitch: 45,
            bearing: -17.6,
            antialias: true
        });

        // map.addControl(new mapboxgl.NavigationControl());
    </script>
  
</body>
</html>
