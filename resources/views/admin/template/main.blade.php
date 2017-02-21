<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css' ) }}">
    <title>@yield('title', 'Default') | Panel de Administracion</title>
</head>
<body class="admin-body">

    <section class="section-admin">

        <!-- Left Side Of Navbar -->
        <ul class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <li><a href="{{ url('/home') }}">Página Principal</a></li>
            </div>
        </ul>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">@yield('titlle')</h3>
            </div>
            <div class="panel-body">
                @include('flash::message')
                @include('admin.template.partials.errors')
                @yield('content')
            </div>
        </div>
    </section>
    
    <footer class="admin-footer">
        <nav class="navbar navbar-default">
            <div class="conteiner-fluid">
                <div class="collapse navbar-collapse">
                    <p class="navbar-text"> Todos los derechos reservados &copy {{ date('Y') }}</p>
                    <p class="navbar-text navbar-right"> Luis Marquez Developer</p>
                </div>
            </div>
        </nav>
        <div class="panel panel-default">
        
    </footer>

    <!-- JavaScripts -->
    <script src="{{ asset ('plugins/jquery/js/jquery-2.2.1.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
