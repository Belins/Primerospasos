<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function getSaludo(){
        return view('saludo');
    }

    function getNombre($nombre){
        return view('saludo2', ['nombre'=>$nombre]);
    }

    function getNombreColor($nombre, $color="blue"){
        return view('saludo3', ['nombre'=>$nombre, 'color'=>$color]);
    }
}
