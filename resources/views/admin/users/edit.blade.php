@extends('adminlte::page')

@section('title', 'Panel Admin')

@section('content_header')
    <h1>Editar profesor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($user,['route'=>['profesores.update',$user],'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre:', ['class'=>'form-label']) !!}
                    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Introduzca el nombre.']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('npda', 'Npda:', ['class'=>'form-label']) !!}
                    {!! Form::text('npda', null, ['class'=>'form-control','placeholder'=>'Introduzca el npda.']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email:', ['class'=>'form-label']) !!}
                    {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Introduzca el email.']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Contraseña:', ['class'=>'form-label']) !!}
                    {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Introduzca el contraseña.']) !!}
                    @error('password')
                    <br>
                    <small class="text-danger">La contraseña es obligatoria</small>
                    <br>
                 @enderror
                </div>
                <div class="form-group">
                    <p><b>Tipo:<b></p>
                    @foreach ($roles as $role)
                        <div>
                            <label>
                                {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                                {{$role->name}}
                            </label>
                        </div>
                    @endforeach
                </div>
                {!! Form::submit('Actualizar Profesor', ['class'=>'btn btn-primary']) !!}
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