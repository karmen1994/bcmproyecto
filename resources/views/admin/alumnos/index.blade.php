@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('alumnos.create')}}">Nuevo Alumno</a>
    <h1>Lista de alumnos</h1>
    
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Grupo</th>
                        <th>Equipo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno)
                        <tr>
                            <td>{{$alumno->id}}</td>
                            <td>{{$alumno->nombre}}</td>
                            <td>{{$alumno->grupo->nombre}}</td>
                            <td>{{$alumno->equipo->numero}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('alumnos.edit',$alumno)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('alumnos.destroy',$alumno)}}" method="post">
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