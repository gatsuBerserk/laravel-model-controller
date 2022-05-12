<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    
    public function index(){
        $movies = Movie::all();
        $data = [
             
            "movies" => $movies,
        ];
        return view ("movies.index", $data);
    }
}
