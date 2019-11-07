<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    function getFormulario(){
        return view('formulario');
    }

    function getFormulario2(){
        return view('formulario2');
    }

    function getResultado(Request $request){
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        return view('formulariorecoje', ['nombre'=>$nombre, 'apellido'=>$apellido]);
    }

    function getResultado2(Request $request){
        $json = File::get(base_path('database/saludos.json'));
        $idiomas = json_decode ($json);
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        return view('formulariorecoje2', ['nombre'=>$nombre, 'apellido'=>$apellido, 'idiomas'=>$idiomas]);
    }


    function getFormulario4(){
        return view('formulario4');
    }

    function formularioValidar(Request $request){
        $validateData = $request->validate
    }

}
