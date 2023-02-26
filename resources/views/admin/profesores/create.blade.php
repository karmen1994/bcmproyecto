@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Agregar profesores</p>

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'profesores.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del profesor']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Correo') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo del profesor']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('npda', 'NPDA') !!}
                    {!! Form::text('npda', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el NPDA del profesor']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Contraseña') !!}
                    {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la contraseña del profesor']) !!}
                </div>
                {!! Form::submit("Crear Profesor", ["class"=>"btn btn-primary"]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

