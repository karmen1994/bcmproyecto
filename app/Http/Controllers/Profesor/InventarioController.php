<?php

namespace App\Http\Controllers\Profesor;

use App\Http\Controllers\Controller;
use App\Models\Periferico;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perifericos =Periferico::all();
        return view('inventario.inventario',compact('perifericos'));
    }

    public function update(Request $request, Periferico $periferico)
    {
       /*  return $periferico; */
        $periferico->update($request->all());
        return redirect()->route('inventario.index');
    }


}
