<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Equipo;
use App\Models\Grupo;
use App\Models\Incidencia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('main');
    }
    public function aulas(){
        $aulas= Aula::all();
        $incidencias= Incidencia::where('estado','like','pendiente')->latest('id')->paginate(8);
        return view('incidencias.aulas', compact('aulas','incidencias'));
    }
    public function inventario(){
        return view('inventario.inventario');
    }
    
    public function equipos(Aula $aula){
        $grupos=Grupo::where('aula_id',$aula->id)->get();
        $equipos=Equipo::where('aula_id',$aula->id)->get();
        return view('incidencias.equipos',compact('equipos','grupos'));
    }
    /* public function incidencias(Equipo $equipo){
        return view('incidencias.incidencias', compact('equipo'));
    } */
}
