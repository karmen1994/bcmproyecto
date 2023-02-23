@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Crear incidencia</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>['incidencias.store']]) !!}
            <div class="form-group">
                {!! Form::label('equipo_id', 'Equipo:',['class'=>'form-label fw-bold fs-5']) !!} 
                <select name="equipo_id" id="equipo" class="form-control">
                    <option>Selecciona un equipo</option>
                    @foreach ($equipos as $equipo)
                        <option value="{{$equipo->id}}">{{$equipo->numero}}</option>
                    @endforeach
                </select>
                {!! Form::hidden('estado','pendiente') !!}
                {!! Form::hidden('user_id', auth()->user()->id) !!}
            </div>
            <div class="form-group">
                {!! Form::label('detalles', 'Detalles:',['class'=>'form-label fw-bold fs-5']) !!}
                {!! Form::textarea('detalles', null, ['class'=>'form-control']) !!}
                @error('detalles')
                    <small class="text-danger">El campo detalles es requerido</small>
                @enderror
            </div>
            <div class="form-group mt-3">
                <p class="form-label fw-bold fs-5">Turno:</p>
                <label class="form-check-label">
                    {!! Form::radio('turno','Mañana',true,['class'=>'']) !!}
                    Mañana
                </label>
                <label class="form-check-label">
                    {!! Form::radio('turno','Tarde',null,['class'=>'']) !!}
                    Tarde
                </label>
                @error('turno')
                    <small class="text-danger">El campo turno es requerido</small>
                @enderror
            </div>
            <div class="form-group mt-3 mb-5">
                {!! Form::label('fecha','Fecha:', ['class'=>'form-label fw-bold fs-5']) !!}
                {!! Form::date('fecha', 'fecha', ['class'=>'form-control']) !!}
                @error('fecha')
                    <small class="text-danger">el campo fecha es requerido</small>
                @enderror
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                {!! Form::submit('Crear Incidencia', ['class'=>'btn btn-primary']) !!}
            </div>
           
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