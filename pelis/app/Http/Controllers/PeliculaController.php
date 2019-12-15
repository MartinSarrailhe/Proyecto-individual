<?php

namespace App\Http\Controllers;

use App\Generos;
use App\Pelicula;
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
      $pelicula = Pelicula::orderBy('name')->paginate(16);
      $generos = Genero::all();

      return view('products')->with([
        'generos'=> $generos,
        'pelicula' => $pelicula,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function genero($id)
     {

       $pelicula = pelicula::where('generos_id', $id)->paginate(16);
       $generos = Genero::all();
       $genero = Genero::find($id);

       return view('generos')->with([
         'generos' => $generos,
         'genero' => $genero,
         'pelicula' => $pelicula,
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
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Pelicula::find($id);
        $mightAlsoLike = Pelicula::where('id', '!=', $id)->inRandomOrder()->take(4)->get();

        return view('titulos')->with([
          'pelicula' => $pelicula,
          'mightAlsoLike' => $mightAlsoLike,
        ]);
    }


    public function search(Request $request)
    {
      $query = $request->input('query');

      $pelicula = Pelicula::where('name', 'like', "%$query%")->get();
      $genero = Genero::where('name', 'like', "%$query%")->get();

      return view('search-results')->with([
        'pelicula' => $pelicula,
        'genero' => $genero,
      ]);
    }

    public function accion(){

      $pelicula = Pelicula::where('category_id', 5)->get();

      return view('accion')->with([
        'pelicula' => $pelicula,
      ]);

    }

    public function aventura(){

      $pelicula = Pelicula::where('category_id', 8)->get();

      return view('aventura')->with([
        'pelicula' => $pelicula,
      ]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    public function buildpc($id)
    {
      $pelicula = pelicula::where('generos_id', $id)->get();
      $generos = Generos::all();
      $genero = Genero::find($id);
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
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
