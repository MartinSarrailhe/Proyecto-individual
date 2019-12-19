<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Entrega</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/addtitulo.css')}}">


    </head>


    <body>
      @include('header')


      @include('search-bar')

      <div class="addtitulo-form">
        <div class="form">
            <form class="addtitulo-form" method="POST" action="{{ route('addtitulotodb') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name" class="">{{ __('Nombre del titulo') }}</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="name" value="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="">{{ __('Descripción del titulo') }}</label>

                    <div class="">
                        <input id="description" type="text" class="form-control" name="description" value="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="rating" class="">{{ __('Rating del titulo') }}</label>

                    <div class="">
                        <input id="rating" type="number" class="form-control" name="rating" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="category_id" class="">{{ __('Categoria del producto') }}:</label>

                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="10" style="width:1em;height:1em;"> Comedia
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="9" style="width:1em;height:1em;"> Terror
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="3" style="width:1em;height:1em;"> Drama
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="6" style="width:1em;height:1em;"> Accion
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="7" style="width:1em;height:1em;"> Ciencia ficcion
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="2" style="width:1em;height:1em;"> Suspenso
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="8" style="width:1em;height:1em;"> Animacion
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="5" style="width:1em;height:1em;"> Avenuras
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="1" style="width:1em;height:1em;"> Documental
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="4" style="width:1em;height:1em;"> Infantiles
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="11" style="width:1em;height:1em;"> Fantasia
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="genres_id" type="radio" class="form-control" name="genres_id" value="12" style="width:1em;height:1em;"> Musical
                    </div>

                </div>

                <div class="form-group">
                    <label for="featured_img" class="">{{ __('Imagen del titulo') }}</label>

                    <div class="">
                        <input id="featured_img" type="file" name="featured_img" placeholder="">
                    </div>
                </div>

                <div class="form-group-button">
                    <div class="">
                        <button class="addtitulo-button" type="submit" class="btn btn-primary" style="background-color:#3490dc;color:white;border:none;padding:5px;">
                            Agregar Titulo
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </div>

      @include('footer')
    </body>
</html>
