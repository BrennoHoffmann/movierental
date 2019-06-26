<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class actorController extends Controller
{
    //

    public function index(Request $request){
        if($request->isMethod('GET')){
            $allActors = Actor::all();
            return view('actor',["allActors"=>$allActors]);
        }
    }

    public function create(Request $request){
        if($request->isMethod('GET')){
            return view('registerActor');
        }
        $newActor = new Actor();
        $newActor->primeiro_nome = $request->firstName;
        $newActor->ultimo_nome = $request->lastName;
        $newActor->ultima_atualizacao = date('y-m-d');
        $result = $newActor->save();
        return view('registerActor',["result"=>$result]);
    }

    public function edit(Request $request, $id){
        if($request-> isMethod('GET')){
            $actor = Actor::find($id);

            return view('editActor', ["actor"=>$actor]);
        }

        $actor = Actor::find($request->ator_id);
        $actor->primeiro_nome = $request->firstName;
        $actor->ultimo_nome = $request->lastName;
        $result = $actor->save();

        return view("editActor", ["result"=>$result, "actor"=>$actor]);

    }
}
