<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Reporte</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
    background: #eef2f7;
    font-family: Arial, Helvetica, sans-serif;
}

.barra{
    background: linear-gradient(90deg,#1e3c72,#2a5298);
    padding: 15px;
    box-shadow: 0px 4px 10px gray;
}

.menu{
    margin: auto;
}

.nav-tabs .nav-link{
    font-size: 22px;
    padding: 12px 45px;
    border-radius: 10px 10px 0 0;
    color: white;
}

.nav-tabs .nav-link.active{
    background-color: white;
    color: #1e3c72;
    font-weight: bold;
}

.login{
    margin-left: auto;
}

.titulo{
    text-align: center;
    margin-top: 25px;
    font-size: 35px;
    color: #1e3c72;
}

.caja{
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0px 4px 10px gray;
}

.espacio{
    margin-top: 30px;
}
</style>
</head>
<body>

<div class="barra">
  <div class="d-flex align-items-center">
    <ul class="nav nav-tabs menu">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="bi bi-house-fill"></i>
          Inicio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="">
          <i class="bi bi-table"></i>
          Reporte
        </a>
      </li>
    </ul>

  <button class="btn btn-light btn-sm login" onclick="window.location.href='Login.php'">
  <i class="bi bi-person"></i>
  Login
</button>
  </div>
</div>

<h2 class="titulo">Formulario de Reporte</h2>

<div class="container espacio">
  <div class="caja">

    <form action="reporte_insertar.php" method="POST" enctype="multipart/form-data">

    <h4>Datos del Reporte</h4>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Nombre del reporte</label>
        <input type="text" class="form-control" name="TxtNombreReporte">
      </div>
      <div class="col-md-6 mb-3">
        <label>Ubicación exacta</label>
        <input type="text" class="form-control" name="TxtUbicacion">
      </div>
      <div class="col-md-6 mb-3">
        <label>Fecha</label>
        <input type="date" class="form-control" name="TxtFecha">
      </div>
      <div class="col-md-6 mb-3">
       
           <form action="imagen_insertar.php" method = "POST" enctype="multipart/form-data">
     <label>Subir imagen</label>
    <input type="file" name= "img">
      </div>
      <div class="col-md-12 mb-3">
        <label>Descripción del problema</label>
        <textarea class="form-control" rows="4" name="TxtDescripcion"></textarea>
      </div>
    </div>

    <h4 class="mt-4">Datos del Reportante</h4>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="TxtNombre">
      </div>
      <div class="col-md-6 mb-3">
        <label>Apellido</label>
        <input type="text" class="form-control" name="TxtApellido">
      </div>
      <div class="col-md-12 mb-3">
        <label>Número de teléfono</label>
        <input type="tel" class="form-control" name="TxtTelefono">
      </div>
    </div>

    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-lg">Guardar reporte</button>

    </form>
    </div>

  </div>
</div>

</body>
</html>
