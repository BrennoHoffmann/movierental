<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoppingController extends Controller
{
	public function index(Request $request)
	{
        if($request->isMethod('GET')){
            return view('shopping');
        }
	}
    
}
