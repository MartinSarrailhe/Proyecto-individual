<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$genero->name}} - MaSa</title>

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
          <ul>
            @foreach ($generos as $genero)
              <li> <a class="genero-link" href="{{route('genero', $genero->id)}}"> {{ $genero->name }} </a> </li>
            @endforeach
          </ul>
        </div>

        <div class="products">
          @forelse ($peliculas as $pelicula)
            <article class="peliculas">
              <a class="pelicula-img" href="{{route('pelicula.show', $pelicula->id)}}"> <img class="pelicula-image" src="/img/{{ $pelicula->featured_img }}" alt=""> </a>
              <a class="name-pelicula" href="{{route('pelicula.show', $pelicula->id)}}"> <span class="pelicula-name">{{ $pelicula->name }}</span> </a>
              <div class="product-price">${{ $pelicula->price }}</div>
            </article>
          @empty
            <p>No se encontraron peliculas.</p>
          @endforelse

            <div class="pagination pagination-sm">
              {{ $peliculas->links() }}
            </div>


        </div>
      </div>



      @include('footer')
    </body>
