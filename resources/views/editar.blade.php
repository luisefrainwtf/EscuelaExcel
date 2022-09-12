
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Renault</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="clientes">Clientes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="autos">Autos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="reserva">Reservas</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<form action="/editar" method="GET" class="row g-3 needs-validation" novalidate  >
    @csrf

    <h4>
    Digite el nombre del carro
</h4>
<div class="col-sm-4 m">
<input type="text" class="form-control" name ="texto" value="{{$texto}}">
</div>
<div class="col-auto">
<input type="submit" class="form-btn btn-primary" vale ="buscar" >
</div>

    <table class="table">
  <thead>
    <tr>
    <th scope="col">opciones</th>
      <th scope="col">id_ref</th>
      <th scope="col">name_car</th>
      <th scope="col">planta</th>
      <th scope="col">fech_ensam</th>
      <th scope="col">model</th>
      <th scope="col">city</th>
    
    </tr>
  </thead>
  <tbody>
    @if(count($autos)<=0)
      <tr>
          <td> No hay resultados </td>
      </tr>
    @else
    @foreach($autos as $autos)
    <tr>
      <td><a href="{{url('editarcar',$autos->id_ref)}}" class="btn btn-warning btn-sm">Editar </a>
      <td>{{$autos->id_ref}}</td>
      <td>{{$autos->name_car}}</td>
      <td>{{$autos->planta}}</td>
      <td>{{$autos->fech_ensam}}</td>
      <td>{{$autos->model}}</td>
      <td>{{$autos->city}}</td>

    </tr>
    @endforeach
    @endif
  </tbody>
</table>


</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>