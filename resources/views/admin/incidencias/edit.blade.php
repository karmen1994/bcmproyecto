@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Editar incidencia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($incidencia,['route'=>['incidencias.update',$incidencia],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('equipo_id', 'Equipo:',['class'=>'form-label fw-bold fs-5']) !!} 
            <select name="equipo_id" id="equipo" class="form-control">
                @foreach ($equipos as $equipo)
                    @if ($equipo->id==$incidencia->equipo_id)
                        <option value="{{$equipo->id}}" hidden>{{$equipo->numero}}</option>
                    @endif
                @endforeach
                @foreach ($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->numero}}</option>
                @endforeach
            </select>
            {!! Form::hidden('user_id', auth()->user()->id) !!}
        </div>
        <div class="form-group mt-3">
            <p class="form-label fw-bold fs-5">Estado:</p>
            <label class="form-check-label">
                {!! Form::radio('estado','pendiente',true,['class'=>'']) !!}
                Pendiente
            </label>
            <label class="form-check-label">
                {!! Form::radio('estado','revisando',null,['class'=>'']) !!}
                Revisando
            </label>
            <label class="form-check-label">
                {!! Form::radio('estado','resuelto',null,['class'=>'']) !!}
                Resuelto
            </label>
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
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{$incidencia->fecha}}">
            @error('fecha')
                <small class="text-danger">el campo fecha es requerido</small>
            @enderror
        </div>
            {!! Form::submit('Actualizar Incidencia', ['class'=>'btn btn-primary']) !!}
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