<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #009196;">
    <a class="navbar-brand" href="#">Tarea 1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" href="{{route('home')}}">Inicio</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{request()->routeIs('cursos.*') ? 'active' : ''}}" href="{{route('cursos.index')}}">Cursos</a>
        </li> --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{request()->routeIs('inicio-grafo') ? 'active' : ''}}" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Grafos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('inicio-grafo')}}">Inicio</a>
              <a class="dropdown-item" href="{{route('crear-grafo')}}">Crear Grafo</a>
              {{-- <a class="dropdown-item" href="{{route('cursos.show')}}">Curso PHP</a> --}}
            </div>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">En construcción</a>
        </li> --}}
      </ul>
      <span class="navbar-text">
        Universidad Tecnológica Metropolitana
      </span>
      {{-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}
    </div>
</nav>