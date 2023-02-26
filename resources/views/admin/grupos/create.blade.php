@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Nuevo grupo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'grupos.store']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre:', ['class'=>'form-label']) !!}
                    {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Introduzca el nombre.']) !!}
                </div>
                <div class="form-group">
                    <p><b>Turno:</b><br>
                        <label class="form-check-label">
                            <input type="radio" name="turno" value="Mañana" checked>Mañana
                        </label> <br>
                        <label class="form-check-label">
                            <input type="radio" name="turno" value="Tarde" >Tarde
                        </label>
                    </p>
                </div>
                <div class="form-group">
                    {!! Form::label('aula_id', 'Aula:', ['class'=>'form-label']) !!}
                    <select name="aula_id" class="form-control">
                        <option selected disabled  hidden>Seleccione una aula</option>
                        @foreach ($aulas as $aula)
                            <option value="{{$aula->id}}">{{$aula->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                {!! Form::submit('Crear grupo', ['class'=>'btn btn-primary']) !!}
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