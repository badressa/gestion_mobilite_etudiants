<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Head section -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <!-- Navbar section -->
        @include('partials.navbar')

        <main class="py-4">
            <div class="container">
                <!-- Content section -->
                @yield('content')
            </div>
        </main>

        <!-- Footer section -->
        @include('partials.footer')
    </div>
</body>
</html>
