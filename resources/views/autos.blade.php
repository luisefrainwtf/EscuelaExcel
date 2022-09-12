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
<form action = "{{route('autos')}}" method= "POST" class="row g-3 needs-validation" novalidate  >
    @csrf

    @if (session('success'))
        <h6 class="alert alert-success">{{session('success')}}</h6>
    @endif

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Identificador de referencia</label>
    <input type="text" class="form-control" id="validationCustom02" name="id_ref" required>
  </div>
    @error('id_ref')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror
  
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre carro</label>
    <input type="text" class="form-control" id="validationCustom01" name="name_car" required>
    @error('name_car')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror

  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Planta de producción</label>
    <input type="text" class="form-control" id="validationCustom02" name="planta" required>
  </div>
    @error('planta')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Fecha ensamble</label>
    <input type="text" class="form-control" id="validationCustom02" name="fech_ensam" required>
  </div>
     @error('fech_ensam')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Modelo según matricula</label>
    <input type="text" class="form-control" id="validationCustom02" name="model" required>
  </div>
    @error('model')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="validationCustom02" name="city" required>
  </div>
   @error('city')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>

</form>

</form>

  <h1>
<div class="col-12">
<a href="/editar"> <button class="btn btn-primary" type="submit" >Editar</button></a>

  </div>
</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>