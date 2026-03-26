<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="@yield('meta_desc', 'BrandMantra — India\'s premier digital marketing agency.')" />
    <meta name="keywords" content="digital marketing agency India, SEO, brand strategy, BrandMantra" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta property="og:title" content="@yield('title', 'BrandMantra') — Engineering Growth" />
    <meta property="og:description" content="@yield('meta_desc', 'India\'s premier digital marketing agency.')" />
    <meta property="og:type" content="website" />
    <title>@yield('title', 'BrandMantra') — Engineering Growth</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if (!file_exists(public_path('build/manifest.json')))
        <link rel="stylesheet" href="{{ asset('build/assets/app-B_sZZ52w.css') }}">
        <script src="{{ asset('build/assets/app-e3ppTjh-.js') }}" defer></script>
    @endif
</head>

<body x-data>

    {{-- ── Preloader (suggestion 2) ───────────────────────────── --}}
    <div id="preloader" role="status" aria-label="Loading BrandMantra">
        <svg width="120" height="120" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path id="om-path" fill="none" stroke="#D4A835" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" d="M60 80 C60 55, 80 40, 100 40 C130 40, 148 60, 140 85
           C132 108, 110 110, 96 110 C80 110, 68 100, 72 88
           C76 76, 94 75, 100 82 C108 92, 104 110, 92 118
           C80 126, 64 120, 58 140
           M58 140 C54 152, 60 160, 70 158
           M100 40 C100 30, 130 28, 140 40
           M145 68 C155 62, 162 68, 158 78 C155 86, 145 88, 140 85" />
            <path fill="none" stroke="#F07A1A" stroke-width="1.5" stroke-linecap="round"
                d="M100 168 C86 168, 78 158, 78 150 C78 138, 90 130, 100 130 C110 130, 122 138, 122 150 C122 158, 114 168, 100 168"
                stroke-dasharray="120" stroke-dashoffset="120" style="animation: drawOm 0.8s ease 1.2s forwards;" />
        </svg>
        <span class="pre-logo">BRANDMANTRA</span>
        <span class="pre-sub">ब्रांड का मंत्र</span>
    </div>

    {{-- ── Scroll Progress ──────────────────────────────────── --}}
    <div id="scroll-progress"></div>

    {{-- ── Custom Cursor ────────────────────────────────────── --}}
    <div id="cursor-glow"></div>

    {{-- ── Page Transition ─────────────────────────────────── --}}
    <div id="page-transition"></div>

    {{-- ── Navbar ───────────────────────────────────────────── --}}
    @include('partials.navbar')

    {{-- ── Main Content ─────────────────────────────────────── --}}
    <main>
        @yield('content')
    </main>

    {{-- ── Footer ──────────────────────────────────────────── --}}
    @include('partials.footer')

    {{-- ── Toast Notification (suggestion 6) ─────────────── --}}
    @if(session('success'))
        <div id="form-toast" role="alert">
            <span class="toast-icon">✦</span>
            <div>
                <div class="toast-title">Message Received — नमस्ते!</div>
                <div class="toast-msg">{{ session('success') }}</div>
            </div>
        </div>
    @endif

</body>

</html>