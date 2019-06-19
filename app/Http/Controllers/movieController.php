<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class movieController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('GET')){
            $allMovies = Movie::all();
            return view('movie',["allMovies"=>$allMovies]);
        }
    }
}
