<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @stack('head::start')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $site_description ?? settings()->get('general.site_description') ?? '' }}">

    <title>
        {{ (isset($title) ? $title . ' | ' : '') . (settings()->get('general.site_name') ?? config('app.name', 'Laravel')) }}
    </title>

    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" href="{{ \Illuminate\Support\Facades\Storage::url(settings()->get('general.site_favicon')) ?? asset('assets/logos/favicon.ico') }}" type="image/x-icon"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? config('app.name', 'Laravel') }}">
    <meta property="og:description" content="{{ $site_description ?? settings()->get('general.site_description') ?? '' }}">
    <meta property="og:image" content="{{ $og_image ?? \Illuminate\Support\Facades\Storage::url(settings()->get('general.og_image')) ?? asset('images/og-image.jpg') }}">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? config('app.name', 'Laravel') }}">
    <meta property="twitter:description" content="{{ $site_description ?? settings()->get('general.site_description') ?? '' }}">
    <meta property="twitter:image" content="{{ $og_image ?? \Illuminate\Support\Facades\Storage::url(settings()->get('general.og_image')) ?? asset('images/og-image.jpg') }}">

    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    @stack('head::before-scripts')

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')

    @stack('head::styles')
    @stack('head::scripts')

    {{-- JSON-LD --}}
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "{{ config('app.name', 'Laravel') }}",
            "url": "{{ config('app.url') }}"
        }
    </script>

    @stack('head::end')
</head>
<body class="antialiased" dir="{{(app()->isLocale('ar') ? 'rtl' : 'ltr')}}">
    @stack('body::start')
    <x-navigation />

    @stack('body::before-main')
    <main>
        {{ $slot }}
    </main>
    @stack('body::after-main')

    <x-footer />
    @filamentScripts
    @vite('resources/js/app.js')
    @stack("body::scripts")

    @stack('body::end')
</body>
</html>
