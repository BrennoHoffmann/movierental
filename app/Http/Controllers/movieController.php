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



    public function edit(Request $request, $id){
        if($request-> isMethod('GET')){
            $movie = Movie::find($id);

            return view('editMovie', ["movie"=>$movie]);
        }

        $movie = Movie::find($request->filme_id);
        $movie->titulo = $request->firstName;
        
        $result = $movie->save();

        return view("editMovie", ["result"=>$result, "movie"=>$movie]);

    }

    public function delete(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return redirect('/movies')->with('success', 'Movie deleted!');
    }
}
