<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use App\Rules\dni;
use File;


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

    function formularioValidar(ContactoRequest $request){
        
        $validateData = $request->validate([
            'dni' => ['required','regex:/^[a-zA-Z0-9]{5,10}$/', new dni] 
        ]);
        

        return view('formulariorecoje4')->with('nombre',
        $request->input('nombre'))->with('apellido',
        $request->input('apellido'))->with('email',
        $request->input('email'))->with('telefono',
        $request->input('telefono'))->with('dni',
        $request->input('dni'));
    }

    

}
