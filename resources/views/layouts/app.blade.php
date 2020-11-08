<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @if (env('APP_ENV') === 'local')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @else
        <link rel="stylesheet" href="{{ sprintf('%s/css/app.css', env('APP_URL')) }}">
    @endif
    @livewireStyles
</head>
<body>
   <div id="app">
       @yield('content')
   </div>
    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
