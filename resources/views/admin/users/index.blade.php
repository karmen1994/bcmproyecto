@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('profesores.create')}}">Nuevo Profesor</a>
    <h1>Lista de profesores</h1>
    
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Npda</th>
                        <th>Email</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->npda}}</td>
                            <td>{{$user->email}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('profesores.edit',$user)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('profesores.destroy',$user)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Borrar</button>
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