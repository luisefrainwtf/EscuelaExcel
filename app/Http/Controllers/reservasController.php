<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\auto;
use resources\views\reserva;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class reservasController extends Controller
{


    public function index()
    {
        $autos=auto::all();
        $clientes=cliente::all();
        
        //return view('reserva')->with(['auto'=>$autos,'cliente'=>$clientes]);
        return view('reserva', compact('clientes','autos'));
    }
    public function insert(Request $request)
    {   
        $request->validate([
            'cedula'=>['required'],
            'id_ref'=>['required'],

        ]);
        $date=Carbon::now();
        $dateend=Carbon::now();
        

        $dateend=$dateend->subDay();
        $dateend=$dateend->toDateTimeString();
        $date=$date->toDateTimeString();

        $tiemporeser=DB::table('admins')
        ->select('created_at')
        ->where('id_ref',$request->id_ref)
        ->where('created_at','>=', $dateend)
        ->where('created_at','<=', $date)->get();
        
        $autos=DB::table('admins')
            ->select('cedula')
            ->where('cedula',$request->cedula)->count();
        
        if ($autos >=3){
            return redirect()->route('reserva')->with('alert','Usted ya tiene 3 reservas');
            //return redirect()->route('reserva')->withErrors(['msg' => 'The Message']);
        }
        else {
        #if ($tiemporeser >= $dateend && $tiemporeser <=$date){
        if (count($tiemporeser) >=1){
            return redirect()->route('reserva')->with('alert','El auto ya se encuentra reservado');
            //return [$date,$dateend,$tiemporeser];
        }
        else {
            $reserva=New admin;
            $reserva->cedula = $request->cedula;
            $reserva->id_ref = $request->id_ref;
            $reserva->save();
            // return [$date,$dateend,$tiemporeser];
           return redirect()->route('reserva')->with('success','Se ha reservado correctamente');
        }

        }

        

    }

}
