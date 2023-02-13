<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = User::all();
        return view("admin.profesores.index", compact('profesores'));
    }

    public function create()
    {
        return view("admin.profesores.create");
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function show(User $profesor)
    {
        //
    }

    public function edit(User $profesor)
    {
        return view("admin.profesores.edit", compact('profesor'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(User $profesor)
    {
        //
    }
}
