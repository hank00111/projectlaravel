<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'project') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/comm.css') }}" rel="stylesheet">
    <link href="{{ asset('css/subtest.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('layouts.navtest')

        <main>

            <div class="container">

                <div class="main_1">
                    @yield('content')
                </div>

            </div>

        </main>
 
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0;padding:3rem 2rem">
        <p style="color:#fff">©2018 Project HANK</p>
    </div>

</body>
</html>
