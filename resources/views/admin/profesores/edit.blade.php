@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<p>Editar profesor</p>
{{$profesor}}
{{-- <div class="card">
    <div class="card-body">
        {!! Form::model($profesor,['route' => ['profesores.update',$profesor], 'method'=>'put']) !!}
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
            {!! Form::submit("Actualizar Profesor", ["class"=>"btn btn-primary"]) !!}
        {!! Form::close() !!}
    </div>
</div> --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop