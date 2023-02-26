@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Nueva aula</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'aulas.store']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre:', ['class'=>'form-label']) !!}
                    {!! Form::text('nombre',null, ['class'=>'form-control','placeholder'=>'Introduzca el nombre']) !!}
                </div>
                {!! Form::submit('Crear Aula', ['class'=>'btn btn-primary']) !!}
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