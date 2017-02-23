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
      <img class="admin-logo-nav" src="images/LogoAlcaldiaValencia.jpg">
      <img class="admin-logo-nav" href="{{ asset('images/LogoAlcaldiaValencia.jpg') }}" >
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if (Auth::user()) 
        <ul class="nav navbar-nav">
          <li><a href="{{route('admin.users.index') }}">Usuarios</a></li>
          <li><a href="{{route('admin.personas.index') }}">Personal</a></li>
          <li><a href="{{route('admin.transportes.index') }}">Transportes</a></li>
          <li><a href="{{route('admin.articles.index') }}">Articulos</a></li>
          <li><a href="{{route('admin.categories.index') }}">Categorias</a></li>
          <li><a href="{{route('admin.images.index') }}">Imagenes</a></li>
          <li><a href="{{route('admin.tags.index') }}">Tags</a></li>
        </ul>
      @endif 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>