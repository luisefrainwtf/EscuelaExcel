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
<form action = "{{route('clientes')}}" method= "POST" class="row g-3 needs-validation" novalidate>
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{session('success')}}</h6>
    @endif

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Cedula</label>
    <input type="text" class="form-control" name="cedula" id="validationCustom02" required>
  </div>
    @error('cedula')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="validationCustom01"  required>
    @error('nombre')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror

  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="validationCustom02"  required>
  </div>
    @error('apellido')
        <h6 class="alert alert-danger">{{$message}}</h6>
    @enderror

  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
