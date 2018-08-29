<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'App Teste Realizza') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('include._nav')


    @if(\Illuminate\Support\Facades\Session::has('flash_message'))
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1" style="margin-left: auto; margin-right: auto; padding-top: 30px;">
                    <div align="center" class="alert {{ \Illuminate\Support\Facades\Session::get('flash_message')['class'] }}">
                        {{ \Illuminate\Support\Facades\Session::get('flash_message')['msg'] }}
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<main class="py-4">
    @yield('content')
</main>
</div>
</body>
</html>