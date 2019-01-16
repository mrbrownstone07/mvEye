<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

        <!-- Stylesheet -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        
        
        <!-- App Name -->
        <title>{{config('app.name'), 'Maverick Eye'}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Stalemate' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Julius+Sans+One:400' rel='stylesheet' type='text/css'>

        <script>
        </script>
        
    </head>
    <body style="margin-top:55px">
        @include('inc.navbar')
        @yield('content')
        {{-- @include('components.footbar') --}}
    </body>
</html>