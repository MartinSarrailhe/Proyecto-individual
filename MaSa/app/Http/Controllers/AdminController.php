<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
      return view('addpelicula');
    }

    public function createProduct(Request $request)
    {
        if ($request->hasFile('featured_img')) {
          $file = $request->file('featured_img');
          $name = time().$file->getClientOriginalName();
          $file->move(public_path().'/img/', $name);
        }
      // dd($request);
        $pelicula = new Peliculas;

        $pelicula->name = $request->input('name');
        $pelicula->description = $request->input('description');
        //$pelicula->price = $request->input('price');
        $pelicula->rating = $request->rating('rating');
        $pelicula->genero_id = $request->input('genero_id');
        $pelicula->featured_img = $name;
        $pelicula->save();

        return redirect('home');
    }
}
