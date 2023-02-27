@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('perifericos.create')}}">Nuevo Periferico</a>
    <h1>Lista de perifericos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cantidad Disponible</th>
                        <th>Ubicación</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($perifericos as $periferico)
                        <tr>
                            <td>{{$periferico->id}}</td>
                            <td>{{$periferico->nombre}}</td>
                            <td>{{$periferico->cantidad}}</td>
                            <td>{{$periferico->ubicacion}}</td>
                            <td width="10px">
                                <a href="{{route('perifericos.edit',$periferico)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('perifericos.destroy',$periferico)}}" method="post">
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