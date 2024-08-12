@extends('home.includes.layout')
@section('title', 'Home')
@section('header-area')
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/startup-startup.css') }}">

@endsection
@section('content')



@section('script-area')
    <!-- javascript libraries -->
    <script data-cfasync="false" src="{{ asset('home/assets/homepage/js/cloudflare-static-email-decode.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/6617-js-jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/567-js-vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/7637-js-main.js') }}"></script>
@endsection

@endsection
