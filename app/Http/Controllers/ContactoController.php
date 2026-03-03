<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function formulario_contacto() {
        return view('formulario-contacto');
    }

    public function recibe_formulario() {
        return "Formulario recibido";
    }
    
    public function listaContactos() {
    
        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();
        return redirect()->back;
    }
    
    public function listaContactos()
    {

    }
}