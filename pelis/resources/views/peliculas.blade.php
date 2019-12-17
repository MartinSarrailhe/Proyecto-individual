<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Productos - MaSa</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/peliculas.css')}}">

    </head>

    <body>
      @include('header')

      @include('search-bar')

      <div class="peliculas-container">
        <div class="generos">
          <h2 class="generos-title">Generos</h2>
          <ul class="listagenero">
            @foreach ($generos as $genero)
              <li class="nombresgeneros"> <a class="genero-link" href="{{route('generos', $generos->id)}}"> {{ $generos->name }} </a> </li>
            @endforeach
          </ul>
        </div>

        <div class="peliculas">
          @forelse ($peliculas as $pelicula)
            <article class="peliculas">
              <a class="pelicula-img" href="{{route('peliculas.show', $peliculas->id)}}"> <img class="peliculas-image" src="/img/{{ $peliculas->featured_img }}" alt=""> </a>
              <a class="name-peliculas" href="{{route('peliculas.show', $peliculas->id)}}"> <span class="peliculas-name">{{ $peliculas->name }}</span> </a>
              <div class="peliculas-price">${{ $peliculas->price }}</div>
            </article>
          @empty
            <p>No se encontraron productos.</p>
          @endforelse

            <div class="pagination pagination-sm">
              {{ $peliculass->links() }}
            </div>


        </div>
      </div>



      @include('footer')
    </body>
