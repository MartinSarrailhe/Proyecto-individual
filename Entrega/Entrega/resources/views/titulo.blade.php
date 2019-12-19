<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$product->name}} - Entrega</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/titulo.css')}}">

    </head>

    <body>
      @include('header')
      @include('search-bar')

      <div class="titulos-container">

        <div class="conteiner">
          <div class=""> <img class="titulo-img" src="/img/{{ $titulo->featured_img }}" alt=""> </div>
          <div class="titulo-info">
            <h1 class="titulo-name">{{ $titulo->name }}</h1>
            <h2 class="titulo-rating">${{ $titulo->rating }}</h2>
            <p class="titulo-detail">{{ $product->description }}</p>
              <form class="" action="/addtocart" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$titulo->id}}">
                <button class="btn btn-success button-add-to-cart" type="submit">Agregar al carrito</a>
              </form>
          </div>
        </div>
      </div>

      @include('might-also-like')

      @include('footer')
    </body>
