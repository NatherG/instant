<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title') | {{ site_name() }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', setting('description', ''))">
    <meta name="author" content="Nather_">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="@yield('type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ favicon() }}">
    <meta property="og:description" content="@yield('description', setting('description', ''))">
    <meta property="og:site_name" content="{{ site_name() }}">
    @stack('meta')
    <!-- Favicons -->
    <link href="{{ site_logo() }}" rel="icon">
    <link href="{{ site_logo() }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="{{ theme_asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('css/style.css') }}" rel="stylesheet">
    @stack('style')

</head>
<body>

    <header>
        @include('elements.navbar')
    </header>
    <section class="w-100" style="height: 70px">

    </section>
    <main class="">
        @yield('content')
    </main>
    <section class="w-100" style="height: 100px">

    </section>
    <footer>
        @include('elements.footer')
    </footer>

<!-- JavaScript Libraries -->
<script src="{{ theme_asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ theme_asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ theme_asset('lib/php-mail-form/validate.js') }}"></script>
<!-- Template Main Javascript File -->
<script src="{{ theme_asset('js/main.js') }}"></script>
</body>
