<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use resources\views\clientes;

class clientesController extends Controller
{
    public function index()
    {
        return view('clientes');
    }

    public function insert(Request $request)
    {   
        $request->validate([
            'cedula'=>['required', 'unique:clientes'],
            'nombre'=>['required'],
            'apellido'=>['required']
        ]);
        $auto=New cliente;
        $auto->cedula = $request->cedula;
        $auto->nombre = $request->nombre;
        $auto->apellido = $request->apellido;
        $auto->save();

        return redirect()->route('clientes')->with('success','cliente resgistro correctamente');

    }
}