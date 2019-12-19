@extends('layouts.app')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio - Entrega</title>

    <!--Fuente-->
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
    <link rel="stylesheet" href="{{ asset('css/register.css')}}">

</head>

{{-- @section('content') --}}

@include('header')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}

@include('search-bar')

<div class="content">

        <div class="img-button">
          <img class="banner-nvidia" src="img/coca.jpg" alt="">
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
                    <div class="tiutlo-rating">${{ $titulo->rating }}</div>
                  </article>
                @empty
                  <p>No se encontraron titulos.</p>
                @endforelse
          </section>
          <div class="div-button">
              <button class="more-titulos-button" type="button" name="button"><a href="{{url('/titulos')}}">ver más titulos</a></button>
          </div>
        </div> <!-- fin de productos -->
</div>

@include('footer')
{{-- @endsection --}}
<script src="{{ asset('js/landing-page.js')}}"></script>
