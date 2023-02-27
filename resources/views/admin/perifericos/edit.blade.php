@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Editar Periferico</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($periferico,['route'=>['perifericos.update',$periferico],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:', ['class'=>'form-label']) !!}
                {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Introduzca el nombre.']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('cantidad', 'Cantidad:', ['class'=>'form-label']) !!}
                {!! Form::number('cantidad', null, ['class'=>'form-control','placeholder'=>'Introduzca la cantidad.']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('ubicacion', 'Ubicacion:', ['class'=>'form-label']) !!}
                {!! Form::text('ubicacion', null, ['class'=>'form-control','placeholder'=>'Introduzca la ubicación.']) !!}
            </div>
            {!! Form::submit('Actualizar Periferico', ['class'=>'btn btn-primary']) !!}
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