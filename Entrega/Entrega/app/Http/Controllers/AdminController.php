<?php

namespace \Http\Controllers;

use Auth;
use Final\Titulo;
use Final\Genres;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      return view('addtitulo');
    }

    public function createProduct(Request $request)
    {
        if ($request->hasFile('featured_img')) {
          $file = $request->file('featured_img');
          $name = time().$file->getClientOriginalName();
          $file->move(public_path().'/img/', $name);
        }
      // dd($request);
        $titulo = new Titulo;

        $titulo->name = $request->input('name');
        $titulo->description = $request->input('description');
        $titulo->price = $request->input('price');
        $titulo->category_id = $request->input('genres_id');
        $titulo->featured_img = $name;
        $titulo->save();

        return redirect('home');
    }
}
