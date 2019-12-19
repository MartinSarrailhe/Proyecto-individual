<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Entrega</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">


    </head>


    <body>
      @include('header')


      @include('search-bar')

      <div class="content">

              <div class="img-button">
              <img class="banner-titulo" src="img/pochoclos.jpg" alt="">
                <button id="anterior"><</button>
                <button id="siguiente">></button>
              </div>

              <div class="popular-titulos text-center">
                <h3 class="popular-titulos">Más populares</h3>
                <section class="populars-section">
                      @forelse ($titulos as $titulo)
                        <article class="titulos">
                          <a class="titulo-img" href="{{route('titulo.show', $titulo->id)}}"> <img class="titulo-image" src="/img/{{ $titulo->featured_img }}" alt=""> </a>
                          <a class="name-titulo" href="{{route('titulo.show', $titulo->id)}}"> <span class="titulo-name">{{ $titulo->name }}</span> </a>

                        </article>
                      @empty
                        <p>No se encontraron titulos.</p>
                      @endforelse
                </section>
                <div class="div-button">
                    <button class="more-titulos-button" type="button" name="button"><a href="{{url('/peliculas')}}">ver más titulos</a></button>
                </div>
              </div>
      </div>

      @include('footer')
      <script src="{{ asset('js/landing-page.js')}}"></script>
    </body>
</html>
