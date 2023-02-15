<?php

namespace App\Http\Controllers\Profesor;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Models\Incidencia;
use App\Http\Requests\Profesor\IncidenciaRequest;

class IncidenciaController extends Controller
{
  
    public function create(Equipo $equipo)
    {
     return view('incidencias.incidencias',compact('equipo')); 
    }

    public function store(IncidenciaRequest $request)
    {
       $incidencia = Incidencia::create($request->all());
       return redirect()->route('main');
    }

}
