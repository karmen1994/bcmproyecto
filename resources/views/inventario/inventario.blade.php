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
      <div class="row">
        <div class="col text-center">
          <h1 class="display-1">Inventario</h1>
          <a href="{{route('main')}}">Volver al Inicio</a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-1"></div>
        <div class="col">
          <table class="table text-center">
              <thead>
                <tr class="table-primary">
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>Cantidad</th>
                  <th>Ubicación</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($perifericos as $periferico)
                    <tr>
                      <td>{{$periferico->id}}</td>
                      <td>{{$periferico->nombre}}</td>
                      <td>{{$periferico->cantidad}}</td>
                      <td>{{$periferico->ubicacion}}</td>
                      <td width="10px">
                        {{-- <form action="{{route('inventario.update',$periferico)}}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="nombre" value="">
                            <input type="hidden" name="ubicacion" value="">
                            <input type="hidden" name="cantidad" value="{{$periferico->cantidad-1}}">
                            <input type="submit" value="Usar" class="btn btn-primary btn-sm">
                        </form> --}}
                        {!! Form::model($periferico, ['route'=>['inventario.update',$periferico],'method'=>'put']) !!}
                          {!! Form::hidden('nombre', null) !!}
                          {!! Form::hidden('ubicacion', null) !!}
                          {!! Form::hidden('cantidad', $periferico->cantidad-1) !!}
                          {!! Form::submit('Usar', ['class'=>'btn btn-primary btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
</body>
</html>