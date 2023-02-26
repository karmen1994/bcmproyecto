@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
<a class="btn btn-secondary float-right" href="{{route('incidencias.create')}}">Nueva Incidencia</a>
    <h1>Lista de incidencias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Detalle</th>
                        <th>Turno</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Equipo</th>
                        <th>Profesor</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incidencias as $incidencia)
                        <tr>
                            <td>{{$incidencia->id}}</td>
                            <td>{{$incidencia->detalles}}</td>
                            <td>{{$incidencia->turno}}</td>
                            <td>{{$incidencia->fecha}}</td>
                            <td>{{$incidencia->estado}}</td>
                            <td>
                                @foreach ($equipos as $equipo)
                                    @if ($equipo->id==$incidencia->equipo_id)
                                        {{$equipo->numero}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($users as $user)
                                    @if ($user->id==$incidencia->user_id)
                                        {{$user->name}}
                                    @endif                                    
                                @endforeach
                            </td>
                            <td width="10px">
                                <a href="{{route('incidencias.edit',$incidencia)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('incidencias.destroy',$incidencia)}}" method="post">
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