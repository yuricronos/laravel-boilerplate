<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ url('vendors/css/notyf.min.css') }}">

    <link rel="stylesheet" href="{{ url('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/css/jquery-ui.min.css') }}">

    <!-- Styles -->
    @vite(['resources/assets/css/style.css'])
    @livewireStyles

    <!-- Scripts -->
    <!-- jquery v3.6.0, bootstrap v5.1.3, perfect-scrollbar v1.5.3 -->
    <script src="{{ url('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ url('vendors/js/jquery-ui.min.js') }}"></script>

    @vite(['resources/js/swal.js', 'resources/js/events.js'])

    <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" />
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="container-scroller">
        @livewire('nav-bar', ['navMenu' => $navMenu])

        <div class="container-fluid page-body-wrapper">

            <x-template.side-bar :sidebar="$sideBar" />

            <div class="main-panel">
                <div class="content-wrapper">

                    {{ $header }}

                    {{ $slot }}

                </div>

                <x-template.footer />

            </div>

        </div>

    </div>

    @vite([
        'resources/assets/js/jquery.cookie.js',
        'resources/assets/js/off-canvas.js',
        'resources/assets/js/hoverable-collapse.js',
        'resources/assets/js/misc.js'
    ])


    @livewireScripts
</body>

</html>