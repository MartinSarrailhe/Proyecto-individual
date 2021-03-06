<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$pelicula->name}} - MaSa</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/pelicula.css')}}">

    </head>

    <body>
      @include('header')
      @include('search-bar')

      <div class="peliculas-container">
        {{-- <div class="categories">
          <ul>
            <li class="categories-title">Categorías</li>
            @foreach ($categories as $category)
              <li> <a class="categorie-link" href="{{ route('products', ['category' => $category->id]) }}"> {{ $category->name }} </a> </li>
            @endforeach
          </ul>
        </div> --}}
        <div class="conteiner">
          <div class=""> <img class="pelicula-img" src="/img/{{ $pelicula->featured_img }}" alt=""> </div>
          <div class="pelicula-info">
            <h1 class="pelicula-name">{{ $pelicula->name }}</h1>
            <h2 class="pelicula-price">${{ $pelicula->price }}</h2>
            <p class="pelicula-detail">{{ $pelicula->description }}</p>
              <form class="" action="/addtocart" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$pelicula->id}}">
                <button class="btn btn-success button-add-to-cart" type="submit">Agregar al carrito</a>
              </form>
          </div>
        </div>
      </div>

      @include('might-also-like')

      @include('footer')
    </body>
