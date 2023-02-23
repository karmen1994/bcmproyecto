@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Nuevo alumno</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'alumnos.store']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre:', ['class'=>'form-label']) !!}
                    {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('grupo_id', 'Grupo:', ['class'=>'form-label']) !!}
                    <select class="form-control" name="grupo_id" id="grupo">
                        <option disabled selected hidden>Seleccione un grupo</option>
                        @foreach ($grupos as $grupo)
                            <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    {!! Form::label('equipo_id', 'Equipo:', ['class'=>'form-label']) !!}
                    <select class="form-control" name="equipo_id" id="equipo">
                        <option disabled selected hidden>Seleccione un equipo</option>
                        @foreach ($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->numero}}</option>
                        @endforeach
                    </select>
                </div>
                {!! Form::submit('Crear Alumno', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop