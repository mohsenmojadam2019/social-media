<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-gray-600 bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <form id="logout-form" action="{{route('logout')}}" method="POST" class="hidden">@csrf</form>
        <header>
         <navigation-component :user="{{auth()->user()}}"/>
        </header>
        @yield('content')
    </div>
</body>
</html>
