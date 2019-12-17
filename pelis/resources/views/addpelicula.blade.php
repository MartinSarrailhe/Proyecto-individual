<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MaSa</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/addpelicula.css')}}">


    </head>


    <body>
      @include('header')


      @include('search-bar')

      <div class="addpelicula-form">
        <div class="form">
            <form class="addpelicula-form" method="POST" action="{{ route('addpeliculadb') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name" class="">{{ __('Nombre del pelicula') }}</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="name" value="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="">{{ __('Descripción del pelicula') }}</label>

                    <div class="">
                        <input id="description" type="text" class="form-control" name="description" value="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="">{{ __('Precio del pelicula') }}</label>

                    <div class="">
                        <input id="price" type="number" class="form-control" name="price" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="generos_id" class="">{{ __('Generos de peliculas') }}:</label>

                    <div class="" style="display:flex;align-items:center;">
                        <input id="genero_id" type="radio" class="form-control" name="genero_id" value="9" style="width:1em;height:1em;"> Aventura
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genero_id" type="radio" class="form-control" name="genero_id" value="4" style="width:1em;height:1em;"> Accion
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genero_id" type="radio" class="form-control" name="genero_id" value="3" style="width:1em;height:1em;"> Comedia
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genero_id" type="radio" class="form-control" name="genero_id" value="6" style="width:1em;height:1em;"> Infantil
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genero_id" type="radio" class="form-control" name="genero_id" value="1" style="width:1em;height:1em;"> Ciencia ficcion
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genero_id" type="radio" class="form-control" name="genero_id" value="7" style="width:1em;height:1em;"> Terror
                    </div>


                </div>

                <div class="form-group">
                    <label for="featured_img" class="">{{ __('Imagen del pelicula') }}</label>

                    <div class="">
                        <input id="featured_img" type="file" name="featured_img" placeholder="">
                    </div>
                </div>

                <div class="form-group-button">
                    <div class="">
                        <button class="addpelicula-button" type="submit" class="btn btn-primary" style="background-color:#3490dc;color:white;border:none;padding:5px;">
                            Agregar Pelicula
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </div>

      @include('footer')
    </body>
</html>
