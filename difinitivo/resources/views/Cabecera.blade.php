<header class="header">
  <div class="logoContainer">
    <a class="logo-logo" href="{{url('/')}}"><img class="logo"  src="{{ asset('img/logo.png')}}" alt=""></a>
    <a class="logo-letras" href="{{url('/')}}">
      proyecto
    </a>
  </div> <!-- Fin del div del logo -->

  <div class="nav-container">
      {{-- <div class="">
          <a href="#"><i class="fas fa-bars"></i></a>
      </div> --}}
          <div class="menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
          </div>

          <ul class="nav-links">
            <li> <a class="burguer-links" href="{{url('/')}}">Inicio</a> </li>
            <li> <a class="burguer-links" href="{{url('/peliculas')}}">Peliculas</a> </li>
          </ul>



        @if (Route::has('login'))
            <div class="login-register">
                @auth
                  @if (Auth::user()->is_admin == 1)
                    <a href="{{ route('addpelicula') }}">Agregar pelicula</a>
                  @endif

                    <a class="bienvenido" href="{{ url('/home') }}">Bienvenido: {{ Auth::user()->name }}</a>
                    <a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                    </form>
                @else
                    <a href="{{ route('login') }}">Ingresar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registrate</a>
                    @endif
                @endauth
            </div>
        @endif



  </div> <!-- Fin del top-nav -->

  <script src="{{ asset('js/header.js')}}"></script>
</header>
<div class="space"></div>
