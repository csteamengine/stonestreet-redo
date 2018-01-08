<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stonestreet') }}</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="/css/style.css" rel="stylesheet">

    @yield('cssincludes')
</head>
@include('layouts/adminheader')
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <div class="app-body">
        @include('layouts/adminsidebar')

        @yield('content')
        @include('layouts/adminaside')
    </div>
    @include('layouts/adminfooter')
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('jsincludes')

</body>
</html>
