<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto</title>

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
                <img class="banner-nvidia" src="img/widenvidia-1.png" alt="">
                <button id="anterior"><</button>
                <button id="siguiente">></button>
              </div>

              <div class="popular-pelicula text-center">
                <h3 class="popular-pelicula">Más populares</h3>
                <section class="populars-section">
                      @forelse ($peliculas as $pelicula)
                        <article class="pelicula">
                          <a class="pelicula-img" href="{{route('pelicula.show', $pelicula->id)}}"> <img class="pelicula-image" src="/img/{{ $pelicula->featured_img }}" alt=""> </a>
                          <a class="name-pelicula" href="{{route('pelicula.show', $pelicula->id)}}"> <span class="pelicula-name">{{ $pelicula->name }}</span> </a>

                        </article>
                      @empty
                        <p>No se encontraron peliculas.</p>
                      @endforelse
                </section>
                <div class="div-button">
                    <button class="more-peliculas-button" type="button" name="button"><a href="{{url('/peliculas')}}">ver más peliculas</a></button>
                </div>
              </div>
      </div>

      @include('footer')
      <script src="{{ asset('js/landing-page.js')}}"></script>
    </body>
</html>
