<?php

namespace App\Http\Controllers;

use App\Titulo;
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
        $titulos = Titulo::inRandomOrder()->take(5)->get();

        return view('home')->with('titulos', $titulos);
    }

}
