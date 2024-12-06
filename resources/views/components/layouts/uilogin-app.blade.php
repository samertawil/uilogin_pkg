<!DOCTYPE html>

@php
    if (app()->getLocale() == 'ar') {
        $dir = 'rtl';
    } else {
        $dir = 'ltr';
    }
@endphp


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir={{ $dir }}>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    @if (app()->getLocale() == 'ar')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif


    {{-- @include('layouts.head') --}}
    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<style>
    #global-loader {
        position: fixed;
        z-index: 50000;
        background: #fff;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }

    .loader-img {
        position: absolute;
        right: 0;
        bottom: 0;
        top: 43%;
        left: 0;
        margin: 0 auto;
        text-align: center;
    }
</style>

<body>
    <!-- Loader -->

    <div id="global-loader" wire:loading>
        <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>


    {{ $slot ?? '' }}


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- @include('layouts.footer-scripts') --}}

</body>

</html>
