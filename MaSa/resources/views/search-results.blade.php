<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resultados de busqueda - MaSa</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/search-results.css')}}">

    </head>


    <body>
      @include('header')

      @include('search-bar')

      <h1 class="search-results">Resultados de busqueda: {{ request()->input('query') }}</h1>
      <p class="search-count">{{$peliculas->count()}} resultados</p>
      <div class="content">
              <div class="popular-peliculas text-center">
                <section class="populars-section">
                      @forelse ($peliculas as $pelicula)
                        <article class="peliculas">
                          <a class="pelicula-img" href="{{route('pelicula.show', $peliculas->id)}}"> <img class="pelicula-image" src="/img/{{ $peliculas->featured_img }}" alt=""> </a>
                          <a class="name-pelicula" href="{{route('pelicula.show', $peliculas->id)}}"> <span class="pelicula-name">{{ $peliculas->name }}</span> </a>
                          <div class="pelicula-price">${{ $peliculas->price }}</div>
                        </article>
                      @empty
                        <p class="product-not-found">No se encontro esa pelicula.</p>
                      @endforelse
                </section>

              </div>
      </div>

      @include('footer')

    </body>
</html>
