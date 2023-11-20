
<nav class="navbar navbar-expand-lg bg-dark fs-6 texto-normal" data-bs-theme="dark">
  <div class="ms-4 container-fluid">
    <a class="navbar-brand" href="#">
      <img class="" src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=100,h=100,fit=crop,f=png/meP0q0yleyu9xLn6/muni-libertador-YKbLW0bJMEuZJO2j.png" alt="logo"  width="40" height="40">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item me-2">
          <a class="nav-link" href="/dashboard">Inicio</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link {{ request()->is('titulares*') ? 'active' : '' }}" href="{{ request()->is('titulares*') ? '#' : '/titulares' }}">Titulares</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link {{ request()->is('automotores*') ? 'active' : '' }}" href="{{ request()->is('automotores*') ? '#' : '/automotores' }}">Automotores</a>
        </li>          
        <li class="nav-item me-2">
          <a class="nav-link {{ request()->is('infracciones*') ? 'active' : '' }}" href="{{ request()->is('infracciones*') ? '#' : '/infracciones' }}">Infracciones</a>
        </li>
      </ul>
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Finalizar Sesión</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>