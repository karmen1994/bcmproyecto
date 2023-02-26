@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Editar Equipo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($equipo,['route'=>['equipos.update',$equipo],'method'=>'put']) !!}
            <div class="form-group">
                <input type="hidden" name="averiado" value="no">
                {!! Form::label('numero', 'Número:', ['class'=>'form-label']) !!}
                {!! Form::text('numero', null, ['class'=>'form-control','placeholder'=>'Introduzca el número.']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('aula_id','Aula:', ['class'=>'form-label']) !!}
                <select name="aula_id" id="aula" class="form-control">
                    @foreach ($aulas as $aula)
                        @if ($aula->id == $equipo->aula_id)
                            <option value="{{$aula->id}}" hidden>{{$aula->nombre}}</option>
                        @endif
                    @endforeach
                    
                    @foreach ($aulas as $aula)
                        <option value="{{$aula->id}}">{{$aula->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <p><b>Periféricos:</b></p>
                @foreach ($perifericos as $periferico)
                    <p>
                        {!! Form::checkbox('perifericos[]', $periferico->id, null) !!}
                        {{$periferico->nombre}}
                    </p>
                @endforeach
            </div>
            {!! Form::submit('Actualizar Equipo', ['class'=>'btn btn-primary']) !!}
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