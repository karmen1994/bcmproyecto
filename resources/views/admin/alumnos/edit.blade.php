@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Editar alumno</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($alumno,['route'=>['alumnos.update',$alumno],'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre:', ['class'=>'form-label']) !!}
                    {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('grupo_id', 'Grupo:', ['class'=>'form-label']) !!}
                    <select class="form-control" name="grupo_id" id="grupo">
                        @foreach($grupos as $grupo)
                            @if ($grupo->id == $alumno->grupo_id)
                                <option hidden value="{{$grupo->id}}">{{$grupo->nombre}}</option>
                            @endif
                        @endforeach
                        
                        @foreach ($grupos as $grupo)
                            <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    {!! Form::label('equipo_id', 'Equipo:', ['class'=>'form-label']) !!}
                    <select class="form-control" name="equipo_id" id="equipo">
                        @foreach($equipos as $equipo)
                            @if ($equipo->id == $alumno->equipo_id)
                                <option hidden value="{{$equipo->id}}">{{$equipo->numero}}</option>
                            @endif
                        @endforeach
                        @foreach ($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->numero}}</option>
                        @endforeach
                    </select>
                </div>
                {!! Form::submit('Editar Alumno', ['class'=>'btn btn-primary']) !!}
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