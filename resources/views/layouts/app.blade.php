<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <title>Document</title>
</head>
<body class="">
<header id="modal">
    <register-component></register-component>
    <section class="left-header">
        <div class="logo">
            <a href="{{ route('main') }}"><img src="{{ asset('img/icons/Polygon.svg') }}" alt="logo"></a>
        </div>
        <ul class="navigation">
            <li>Работодателям</li>
            <li>Цены</li>
            <li>Условия</li>
        </ul>
    </section>
    <section class="right-header">
        @if(Auth::guest())
        <button class="header-button" @click="openRegisterModal">Зарегистрироваться</button>
        @else
            <register-menu-component show="{{ route('showResume') }}" cv="{{ route('cvEdit') }}" exit="{{ route('logout') }}"></register-menu-component>
        @endif
        <a href="" class="header-phone">8 800 123 45 67</a>
    </section>
</header>
@if(Request::is('/'))
    @include('partials.main_page_head')
    @else
    @include('partials.pagination')
@endif
<main class="main-block" id="app">
    @yield('content')
</main>
@include('layouts.footer')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
