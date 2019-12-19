<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Peliculas;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pelicula = Movies::orderBy('name')->paginate(16);
      $generos = Genres::all();

      return view('Peliculas')->with([
        'genres'=> $generos,
        'pelicula' => $pelicula,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function genres($id)
     {

       $pelicula = Movies::where('genres_id', $id)->paginate(16);
       $generos = Genres::all();
       $genero = Genres::find($id);

       return view('genres')->with([
         'genres' => $generos,
         'genre' => $genero,
         'movie' => $pelicula,
       ]);

     }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peliculas  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Movies::find($id);
        $mightAlsoLike = Movies::where('id', '!=', $id)->inRandomOrder()->take(4)->get();

        return view('peliculas')->with([
          'peliculas' => $pelicula,
          'mightAlsoLike' => $mightAlsoLike,
        ]);
    }


    public function search(Request $request)
    {
      $query = $request->input('query');

      $pelicula = Movies::where('name', 'like', "%$query%")->get();
      $genero = Genres::where('name', 'like', "%$query%")->get();

      return view('search-results')->with([
        'pelicula' => $pelicula,
        'genero' => $genero,
      ]);
    }

    //public function accion(){

    //  $pelicula = Peliculas::where('genres_id', 5)->get();

    //  return view('accion')->with([
    //    'pelicula' => $pelicula,
  //    ]);

  //  }

  //  public function aventura(){

  //    $pelicula = Pelicula::where('generos_id', 8)->get();

    //  return view('aventura')->with([
    //    'pelicula' => $pelicula,
  //    ]);

  //  }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peliculas  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(pelicula $pelicula)
    {
        //
    }

    public function buildpc($id)
    {
      $pelicula = Movies::where('genres_id', $id)->get();
      $generos = Genres::all();
      $genero = Genres::find($id);
      return view('buildpc')->with([
        'pelicula' => $pelicula,
        'generos' => $generos,
        'genero' => $genero,
      ]);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peliculas  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peliculas  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peliculas $pelicula)
    {
        //
    }
}
