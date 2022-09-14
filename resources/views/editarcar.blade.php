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
<form action = "{{url('editarcar',$autos[0]->id_ref)}}" method= "POST" class="row g-3 needs-validation" novalidate  >
    @csrf

    <!-- @if (session('success'))
        <h6 class="alert alert-success">{{session('success')}}</h6>
    @endif -->

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Identificador de referencia</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{ $autos[0]->id_ref }}" name="id_ref" disabled>
  </div>
    <!-- @error('id_ref')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror
   -->
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre carro</label>
    <input type="text" class="form-control" id="validationCustom01" value="{{ $autos[0]->name_car }}" name="name_car" disabled>
    <!-- @error('name_car')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror -->

  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Planta de producción</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{ $autos[0]->planta }}" name="planta" disabled>
  </div>
    <!-- @error('planta')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror -->

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Fecha ensamble</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{ $autos[0]->fech_ensam }}" name="fech_ensam" required>
  </div>
     <!-- @error('fech_ensam')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror -->

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Modelo según matricula</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{ $autos[0]->model }}" name="model" required>
  </div>
    <!-- @error('model')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror -->

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{ $autos[0]->city }}" name="city" disabled>
  </div>
   <!-- @error('city')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror -->

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Actualizar</button>
  </div>

</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
