<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- TurboLinks -->
    <script src="http://unpkg.com/turbolinks"></script>
</head>
<body>
    <div id="app">
        <section class="px-8 py-4">
            <header class="container mx-auto">
                <a href="{{ route('home') }}">
                    <h1>
                        <img
                            src="{{ asset('images/logo.svg') }}"
                            alt="Parakeet"
                        >
                    </h1>
                </a>
            </header>
        </section>

        {{ $slot }}

        @if(session('status'))
            <div
                id="chirp-status"
                class="text-white"
                data-bg="
                    @if(session('success')) bg-green-500
                    @elseif(session('error')) bg-red-500
                    @endif
                "
            >
                {{ session('status') }}
            </div>
        @endif
    </div>
</body>
</html>
