@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Editar grupo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($grupo,['route'=>['grupos.update',$grupo],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:', ['class'=>'form-label']) !!}
                {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Introduzca el nombre.']) !!}
            </div>
            <div class="form-group">
                <p><b>Turno:</b><br>
                    @if ($grupo->turno=="Mañana")
                        <label class="form-check-label">
                            <input type="radio" name="turno" value="Mañana" checked>Mañana
                        </label> <br>
                        <label class="form-check-label">
                            <input type="radio" name="turno" value="Tarde" >Tarde
                        </label>
                    @else
                        <label class="form-check-label">
                            <input type="radio" name="turno" value="Mañana">Mañana
                        </label> <br>
                        <label class="form-check-label">
                            <input type="radio" name="turno" value="Tarde" checked>Tarde
                        </label>
                    @endif
                </p>
            </div>
            <div class="form-group">
                {!! Form::label('aula_id', 'Aula:', ['class'=>'form-label']) !!}
                <select name="aula_id" class="form-control">
                    @foreach ($aulas as $aula)
                        @if ($aula->id == $grupo->aula_id)
                            <option value="{{$aula->id}}"hidden>{{$aula->nombre}}</option>
                        @endif  
                    @endforeach
                    @foreach ($aulas as $aula)
                        <option value="{{$aula->id}}">{{$aula->nombre}}</option>
                    @endforeach
                </select>
            </div>
            {!! Form::submit('Actualizar grupo', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop