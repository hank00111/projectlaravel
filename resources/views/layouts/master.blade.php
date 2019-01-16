<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=768">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'project') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="../js/jquery.easing.js"></script> 
    <script src="../js/jquery.sub.js"></script>


    <link href="{{ asset('css/comm3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/subtest.css') }}" rel="stylesheet">

        <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

    <script src="https://cdn.datatables.net/buttons/1.5.4/css/buttons.bootstrap4.min.css"></script>
    <script src="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="app">
            @include('layouts.navtest')
            <main>
                <div class="container">
                    <div class="main_1" style="background-color: rgb(230, 230, 230);">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>

        <!-- jQuery -->
        <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <!-- Bootstrap JavaScript -->
        
        <!-- App scripts -->
        @stack('scripts')
        <div class="jumbotron text-center" style="margin-bottom:0;padding:3rem 2rem">
            <p style="color:#fff">©2018 Project HANK</p>
        </div>
    </body>
</html>