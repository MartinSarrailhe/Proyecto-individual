<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $peliculas = Pelicula::inRandomOrder()->take(8)->get();

        return view('home')->with('pelicula', $peliculas);
    }

}
