@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de profesores</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('profesores.create')}}">Añadir nuevo profesor</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th colspan="2">Nombre</th>
                        <th colspan="2">Correo</th>
                        <th>NPDA</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    
                        <tr>
                            <td colspan="2">{{$user->name}}</td>
                            <td colspan="2">{{$user->email}}</td>
                            <td>{{$user->npda}}</td>
                            <td width="10px">
                                <a href="{{route('profesores.edit', $user)}}" class="btn btn-primary btn-s">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('profesores.destroy', $user)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-s">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop