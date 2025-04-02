<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class RegistroAnimal extends Controller
{
    //camelCase
    function animal(){
        return view('registro-animal');
    }       

    function addAnimal(Request $request){
        //dd($request->all());
        
        $usuario = new Animal();
        $usuario->create($request->all());
        return view('registro-animal');
    }
}
