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
        <div class="col text-center">
          <h1 class="display-1">Aulas</h1>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-12 col-md text-center">
        <div class="row">
            @foreach ($aulas as $aula)
                <div class="col m-5">
                    <a href="{{route('aulas.equipos',$aula)}}" class="btn btn-primary p-5" style="width: 140%; height:110%;">{{$aula->nombre}}</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col col-md-4 ms-5 border-start">
        <div class="row">
            <div class="col">
                <h1>Últimas Incidencias</h1>
                <table  class="table p-2 mt-3">
                    <tr class="table-primary  ">
                        <td   class="px-4" scope="col">Equipo</td>
                        <td  scope="col">Detalles</td>
                        <td  scope="col">Turno</td>
                        <td  scope="col">Fecha</td>
                    </tr>
                @foreach ($incidencias as $incidencia)
                    <tr>
                        <td class="px-4">{{$incidencia->equipo->numero}}</td>
                        <td>{{$incidencia->detalles}}</td>
                        <td>{{$incidencia->turno}}</td>
                        <td>{{$incidencia->fecha}}</td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
  </div>
</body>
</html>