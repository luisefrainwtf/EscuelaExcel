<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use resources\views\editar;
use resources\views\autos;
use Illuminate\Support\Facades\DB;

class editarController extends Controller
{
    //
    public function index(Request $request)
    {   
        $texto=trim($request->get('texto'));
        $autos=DB::table('autos')
        //return view('reserva')->with(['auto'=>$autos,'cliente'=>$clientes]);
        // return view('edit', compact('autos')
            ->select('id_ref','name_car','planta','fech_ensam','model','city')
            ->where('name_car','LIKE','%'.$texto.'%')
            ->orwhere('id_ref','LIKE','%'.$texto.'%')
            ->orderBy('fech_ensam','asc')
            ->paginate(10);

        return view('editar', compact('autos','texto'));
    }
    
    // public function update(Request $request, $id_ref)
    // {  
    // $request->validate([

    //     'fech_ensam'=>['required'],
    //     'model'=>['required'],

    // ]);
    // $edicion=auto::find($id_ref);
    // $edicion->fech_ensam = $request->fech_ensam;
    // $edicion->model = $request->model;
    // $edicion->save();

    // return redirect()->route('autos')->with('success','Se ha editado correctamente');

    // }

    public function edit($id_ref){
        $autos=DB::table('autos')
        //return view('reserva')->with(['auto'=>$autos,'cliente'=>$clientes]);
        // return view('edit', compact('autos')
            ->select('id_ref','name_car','planta','fech_ensam','model','city')
            ->where('id_ref',$id_ref)->get();
        return view('editarcar',compact('autos'));
            // return $autos;
    }

    public function update(Request $request){
        $id_ref= $request->id_ref;
        $fech_ensam = $request->input('fech_ensam');
        $model = $request->input('model');

        $isUpdateSuccess = DB::table('autos')
            ->where('id_ref',$id_ref)
            ->update(['fech_ensam'=>$fech_ensam,'model'=>$model]);
        //return view('reserva')->with(['auto'=>$autos,'cliente'=>$clientes]);
        return view('autos');
        //return $isUpdateSuccess;

    }

}