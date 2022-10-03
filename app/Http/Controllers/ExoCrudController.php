<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exoCrud;
use App\Http\Controllers\ExoCrudController;

class ExoCrudController extends Controller
{
    public function welcome()
    {  $posts = exoCrud::all();
        return view('welcome', compact('posts'));
    }

    public function store(Request $request){
        $store = new exoCrud;
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->save();
        return redirect('/')->with('success','Post Created');
    }
}
