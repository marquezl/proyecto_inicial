<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img alt="Sistema de Transporte" class="admin-logo-nav" src="">
    </div>

      <!-- @if (Auth::user()) -->
    <!--  @endif -->
    <!--        expanded="false"> Auth::user->name  <span class="caret"></span></a> -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if (Auth::user()) 
        <ul class="nav navbar-nav">
            <li><a href="#">Inicio</a></li>
            <li><a href="{{route('users.index') }}">Usuarios</a></li>
            <li><a href="{{route('transportes.index') }}">Transportes</a></li>
            <li><a href="{{route('personas.index') }}">Personal</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Pagina Principal</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-
        <ul class="nav navbar-nav">
              <li><a href="/logout">Salir</a></li>
            </ul>
            <!--ul class="dropdown-menu"-->
          </li>
        </ul>
      @endif 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>