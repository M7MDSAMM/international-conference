<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', __('site.meta_description'))">
    <meta name="keywords" content="@yield('meta_keywords', __('site.meta_keywords'))">
    <meta name="author" content="Human First Alliance">
    <meta name="theme-color" content="#61ce5b">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('icon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('icon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('icon.png') }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', __('site.hero.conference_title_' . (app()->getLocale() === 'ar' ? 'ar' : 'en')))">
    <meta property="og:description" content="@yield('og_description', __('site.footer.tagline'))">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="{{ app()->getLocale() === 'ar' ? 'ar_AR' : 'en_US' }}">
    <meta property="og:image" content="{{ asset('logo.png') }}">

    <title>@yield('title', __('site.page_title'))</title>

    <!-- Google Fonts - Poppins for English & Cairo for Arabic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>
<body class="bg-white">

    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="skip-link">{{ __('site.nav.skip_to_content') }}</a>

    @include('partials.navbar')

    <!-- Main Content Wrapper -->
    <main id="main-content" class="pt-16">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Custom JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>

    @stack('scripts')
</body>
</html>
