<!DOCTYPE html>
<html lang="zxx" class="js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>@yield('app-title')</title>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('images/MUNSOLAR 1.png')}}">
    {{-- <title>Munster Solar</title> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- iconify icons -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/dashlitee5ca.css?ver=3.2.3')}}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/themee5ca.css?ver=3.2.3')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

</head>

<body class="nk-body bg-white has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @stack('push_styles')
            @include('layouts.includes.alerts')
            @include('layouts.includes.sidebar')
            @include('layouts.includes.header')
            @yield('main-content')

            @include('layouts.includes.footer')
            @stack('push_script')
