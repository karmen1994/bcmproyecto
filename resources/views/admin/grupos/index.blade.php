@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('grupos.create')}}">Nuevo grupo</a>
    <h1>Lista de grupos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Turno</th>
                        <th>Aula</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grupos as $grupo)
                        <tr>
                            <td>{{$grupo->id}}</td>
                            <td>{{$grupo->nombre}}</td>
                            <td>{{$grupo->turno}}</td>
                            <td>
                                @foreach ($aulas as $aula)
                                    @if ($grupo->aula_id == $aula->id)
                                        {{$aula->nombre}}
                                    @endif
                                @endforeach
                                
                            </td>
                            <td width="10px">
                                <a href="{{route('grupos.edit',$grupo)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('grupos.destroy',$grupo)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
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