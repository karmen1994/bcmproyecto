<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("admin.profesores.index", compact('users'));
    }

    public function create()
    {
        return view("admin.profesores.create");
    }

    public function store(Request $request)
    {
        //return $request->all();
        User::create($request->all());
        return redirect()->route("profesores.index");
    }

    public function show(User $profesor)
    {
        //
    }

    public function edit(User $profesor)
    {   return $profesor;
        return view("admin.profesores.edit", compact('profesor'));
    }

    public function update(Request $request, User $profesor)
    {
        return $request->all();
    }

    public function destroy(User $user)
    {   return $user;
        $user->delete();
        return redirect()->route("profesores.index");
    }
}
