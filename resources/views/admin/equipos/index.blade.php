@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('equipos.create')}}">Nuevo Equipo</a>
    <h1>Lista de equipos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Numero</th>
                        <th>Periféricos</th>
                        <th>Aula</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipos as $equipo)
                        <tr>
                            <td>{{$equipo->id}}</td>
                            <td>{{$equipo->numero}}</td>
                            <td>
                                @foreach ($equipo->periferico as $periferico)
                                    {{$periferico->nombre}}, 
                                @endforeach
                            </td>
                            <td>
                                @foreach ($aulas as $aula)
                                    @if ($aula->id == $equipo->aula_id)
                                        {{$aula->nombre}}
                                    @endif
                                @endforeach
                            </td>
                            <td width="10px">
                                    <a href="{{route('equipos.edit',$equipo)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('equipos.destroy',$equipo)}}" method="post">
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