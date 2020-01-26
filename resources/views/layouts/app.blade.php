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


    @yield('styles')
   

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <title>@yield('title')</title>
  </head>
  <body>

    @include('site.incs.header')
    
    @yield('content')

    @include('site.incs.footer')

    @yield('scripts')


   
</body>
</html>
