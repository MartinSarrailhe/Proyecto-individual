<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resultados de busqueda - Entrega</title>

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
      <p class="search-count">{{$titulos->count()}} resultados</p>
      <div class="content">
              <div class="popular-titulos text-center">
                <section class="populars-section">
                      @forelse ($titulos as $titulo)
                        <article class="titulos">
                          <a class="titulo-img" href="{{route('titulo.show', $titulo->id)}}"> <img class="titulo-image" src="/img/{{ $titulo->featured_img }}" alt=""> </a>
                          <a class="name-titulo" href="{{route('titulo.show', $product->id)}}"> <span class="titulo-name">{{ $titulo->name }}</span> </a>
                          <div class="titulo-rating">${{ $titulo->rating }}</div>
                        </article>
                      @empty
                        <p class="titulo-not-found">No se encontraron titulos.</p>
                      @endforelse
                </section>

              </div>
      </div>

      @include('footer')

    </body>
</html>
