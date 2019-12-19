<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$genero->name}} - Entrega</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/titulos.css')}}">

    </head>

    <body>
      @include('header')

      @include('search-bar')

      <div class="titulo-container">
        <div class="genres">
          <h2 class="genres-title">Generos</h2>
          <ul>
            @foreach ($genres as $genre)
              <li> <a class="genres-link" href="{{route('genero', $genre->id)}}"> {{ $genre->name }} </a> </li>
            @endforeach
          </ul>
        </div>

        <div class="titulo">
          @forelse ($titulos as $titulo)
            <article class="titulos">
              <a class="titulo-img" href="{{route('titulo.show', $titulo->id)}}"> <img class="titulo-image" src="/img/{{ $titulo->featured_img }}" alt=""> </a>
              <a class="name-titulo" href="{{route('titulo.show', $titulo->id)}}"> <span class="titulo-name">{{ $titulo->name }}</span> </a>
              <div class="titulo-rating">${{ $titulo->rating }}</div>
            </article>
          @empty
            <p>No se encontraron titulos.</p>
          @endforelse

            <div class="pagination pagination-sm">
              {{ $titulos->links() }}
            </div>


        </div>
      </div>



      @include('footer')
    </body>
