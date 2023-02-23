@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Crear Equipo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'equipos.store']) !!}
                <div class="form-group">
                    <input type="hidden" name="averiado" value="no">
                    {!! Form::label('numero', 'Número:', ['class'=>'form-label']) !!}
                    {!! Form::text('numero', null, ['class'=>'form-control','placeholder'=>'Introduzca el número.']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('aula_id','Aula:', ['class'=>'form-label']) !!}
                    <select name="aula_id" id="aula" class="form-control">
                        <option disabled selected hidden>Seleccione un aula</option>
                        @foreach ($aulas as $aula)
                            <option value="{{$aula->id}}">{{$aula->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                {!! Form::submit('Crear Equipo', ['class'=>'btn btn-primary']) !!}
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