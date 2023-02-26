@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('aulas.create')}}">Nueva Aula</a>
    <h1>Lista de aulas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aulas as $aula)
                        <tr>
                            <td>{{$aula->id}}</td>
                            <td>{{$aula->nombre}}</td>
                            <td width="10px">
                                <a href="{{route('aulas.edit',$aula)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('aulas.destroy',$aula)}}" method="post">
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