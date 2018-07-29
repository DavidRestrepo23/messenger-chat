<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    
</head>
<body>
    <div id="app">
         <b-navbar toggleable type="dark" variant="primary">
            <b-navbar-toggle target="nav_text_collapse"></b-navbar-toggle>
            <b-navbar-brand href="{{ url('/') }}">{{config('app.name', 'Laravel')}}</b-navbar-brand>
            <b-collapse is-nav id="nav_text_collapse">
                <b-navbar-nav class="ml-auto">
                    @guest
                        <b-nav-item href="{{route('login')}}">Ingresar</b-nav-item>
                        <b-nav-item href="{{route('register')}}">Registro</b-nav-item>
                    @else
                    <!-- Navbar dropdowns -->
                    <b-nav-item-dropdown text="{{ auth()->user()->name }}" right>
                        <b-dropdown-item href="#" @click="logout">Cerrar sesión</b-dropdown-item>
                    </b-nav-item-dropdown>
                   @endguest 
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
        <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display:none;">
            @csrf
        </form>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
