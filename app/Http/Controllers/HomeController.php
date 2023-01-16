<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $all_movies = Movie::all();
         //dd($all_movies);

        return view('pages.home',compact('all_movies'));

    }
}
