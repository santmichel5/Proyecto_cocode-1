<?php
include("session.php");


?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Reportes</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background-color:#1e3c72;
}

.navbar{
    background:#1e3c72;
    border-bottom:3px solid white;
}

.menu a{
    color:white;
    text-decoration:none;
    margin:0 25px;
    font-size:18px;
    padding-bottom:5px;
    border-bottom:2px solid white;
}

.salir{
    margin-left:20px;
    margin-top:10px;
}

.panel{
    background:white;
    width:500px;
    padding:40px;
    border-radius:15px;
    margin:auto;
    margin-top:40px;
    box-shadow:0px 0px 15px black;
}

.btn-reporte{
    background:#0b1e3c;
    color:white;
    width:150px;
}

.btn-lista{
    background:#1e3c72;
    color:white;
    width:150px;
    border-radius:8px;
}

.btn-lista:hover{
    background:#16305c;
    color:white;
}

</style>

</head>
<body>


<nav class="navbar">
    <div class="container d-flex justify-content-center menu">

        <a href="reporte_listar.php">Reportes</a>
      
        <a href="Importancia_form.php">Importancia</a>
        <a href="">Estado</a>
       

    </div>
</nav>

<div class="salir">
    <form action="cerrar.php" method="post">
        <button type="submit" class="btn btn-danger">Salir</button>
    </form>
</div>


<div class="panel text-center">


<form action="Estado_insertar.php" method="POST">

<h1>Agregar estado</h1>

    <div class="text-start">
        <label>Estado</label>
        <input type="text" name="TxtEstado" class="form-control" required>
    </div>

    <br><br>
    <button type="button" class="btn btn-lista"
            onclick="window.location.href='Estado_listar.php'">
        <i class="bi bi-person"></i>
        Lista
    </button>

    
    <br><br>

    <input type="submit" value="Agregar" class="btn btn-reporte">

</form>


</div>


</body>
</html>