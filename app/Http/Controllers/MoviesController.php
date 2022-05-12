<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    
    public function index(){
        // query
        $movies = Movie::all();
        $data = [
            "movie" => new Movie(), 
            "movies" => $movies
        ];
        return view ("movies.index", $data);
    } 
}