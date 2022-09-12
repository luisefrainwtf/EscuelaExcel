<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use resources\views\Autos;

class autosController extends Controller
{
    public function index()
    {
        return view('autos');
    }

    public function insert(Request $request)
    {   
        $request->validate([
            'id_ref'=>['required', 'unique:autos'],
            'name_car'=>['required'],
            'planta'=>['required'],
            'fech_ensam'=>'required|date',
            'model'=>'required|int',
            'model'=>'required|min:4',
            'city'=>['required']
        ]);
        $auto=New Auto;
        $auto->id_ref = $request->id_ref;
        $auto->name_car = $request->name_car;
        $auto->planta = $request->planta;
        $auto->fech_ensam = $request->fech_ensam;
        $auto->model = $request->model;
        $auto->city = $request->city;
        $auto->save();

        return redirect()->route('autos')->with('success','Auto resgistro correctamente');
        //eturn view('autos')->with('success','Auto resgistro correctamente');
    }

}
