<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <div class="container">
      <div class="row m-5">
        <div class="col text-center">Nueva incidencia</div>
      </div>
      <div class="row">
        <div class="col">
           {!! Form::open(['route'=>['incidencias.store',$equipo]]) !!}
                <div class="form-group">
                    {!! Form::label('equipo_id', 'Equipo:',['class'=>'']) !!} 
                    {{$equipo->numero}}
                    {!! Form::hidden('equipo_id', $equipo->id) !!}
                    {!! Form::hidden('estado','pendiente') !!}
                    {!! Form::hidden('user_id', auth()->user()->id) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('detalles', 'Detalles:',['class'=>'']) !!}
                    {!! Form::textarea('detalles', null, ['class'=>'form-control']) !!}
                    @error('detalles')
                        <small class="text-danger">El campo detalles es requerido</small>
                    @enderror
                </div>
                <div class="form-group">
                    <span class="">Turno:</span>
                    <label class="">
                        {!! Form::radio('turno','Mañana',true) !!}
                        Mañana
                    </label>
                    <label class="">
                        {!! Form::radio('turno','Tarde') !!}
                        Tarde
                    </label>
                    @error('turno')
                        <small class="text-danger">El campo turno es requerido</small>
                    @enderror
                </div>
                <div class="form-group mb-5">
                    {!! Form::label('fecha','Fecha:', ['class'=>'']) !!}
                    {!! Form::date('fecha', 'fecha', ['class'=>'form-control']) !!}
                    @error('fecha')
                        <small class="text-danger">el campo fecha es requerido</small>
                    @enderror
                </div>
                {!! Form::submit('Crear Incidencia', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
      </div>
  </div>
</body>
</html>