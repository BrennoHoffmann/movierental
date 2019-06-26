<?php

namespace App\Http\Controllers;
Use App\Client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('GET')){
            $allClients = Client::all();
            return view('client',["allClients"=>$allClients]);
        }
    }

    public function create(Request $request){
        if($request->isMethod('GET')){
            return view('registerClient');
        }
        $newClient = new Client();
        $newClient->primeiro_nome = $request->firstName;
        $newClient->ultimo_nome = $request->lastName;
        $newClient->ultima_atualizacao = date('y-m-d');
        $result = $newClient->save();
        return view('registerClient',["result"=>$result]);
    }
}
