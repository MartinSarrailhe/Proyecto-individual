<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Titulo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $titulos = Titulo::orderBy('name')->paginate(16);
      $genres = Genres::all();

      return view('titulos')->with([
        'genres'=> $genres,
        'titulos' => $titulos,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function genres($id)
     {

       $titulos = Titulo::where('genres_id', $id)->paginate(16);
       $genres = Genres::all();
       $genre = Genres::find($id);

       return view('genre')->with([
         'genres' => $genres,
         'genre' => $genre,
         'titulos' => $titulos,
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
     * @param  \App\Titulo  $Titulo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = Titulo::find($id);
        $mightAlsoLike = Titulo::where('id', '!=', $id)->inRandomOrder()->take(5)->get();

        return view('product')->with([
          'titulo' => $titulo,
          'mightAlsoLike' => $mightAlsoLike,
        ]);
    }


    public function search(Request $request)
    {
      $query = $request->input('query');

      $titulos = Titulo::where('name', 'like', "%$query%")->get();
      $genres = Genres::where('name', 'like', "%$query%")->get();

      return view('search-results')->with([
        'titulos' => $titulos,
        'category' => $genres,
      ]);
    }

    public function algo(){

      $titulos = Titulo::where('genres_id', 5)->get();

      return view('algo')->with([
        'titulos' => $titulos,
      ]);

    }

    public function peli(){

      $titulos = Titulo::where('genres_id', 8)->get();

      return view('peli')->with([
        'Titulos' => $titulos,
      ]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Titulo $titulo)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titulo $titulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titulo $titulo)
    {
        //
    }
}
