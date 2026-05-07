<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inicio</title>

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
    padding: 20px;
    box-shadow: 0px 4px 10px gray;
    transition: 0.3s;
}

.caja:hover{
    transform: scale(1.02);
}



.espacio{
    margin-top: 30px;
}

p {
  text-align: justify;
}

</style>

</head>
<body>




<div class="barra">

<div class="d-flex align-items-center">

<ul class="nav nav-tabs menu">

<li class="nav-item">
<a class="nav-link active" href="#">
<i class="bi bi-house-fill"></i>
Inicio
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="reporte_form.php">
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


<h2 class="titulo">
Bienvenido a tu cocode asiste
</h2>



<div class="container espacio">

<div class="row">

<div class="col-md-6">
<div class="caja">
<h4>Misión</h4>
<p>
    Proveer una plataforma digital diseñada específicamente para nuestra comunidad, que facilite el reporte directo de incidencias entre los vecinos y el COCODE local. Buscamos que la gestión de problemas comunitarios sea más organizada y transparente, utilizando herramientas tecnológicas sencillas para mejorar nuestro entorno inmediato.
</p>
</div>
</div>


<div class="col-md-6">
<div class="caja">
<h4>Visión</h4>
<p>
    Ser la herramienta principal de comunicación y gestión interna de nuestra comunidad, logrando que cada reporte ciudadano sea atendido de forma eficiente. Aspiramos a que este sistema fortalezca la unión entre vecinos y el COCODE, sirviendo como un ejemplo de cómo la tecnología puede resolver problemas locales de forma moderna.
</p>
</div>
</div>

</div>

<div class="row espacio">

<div class="col-md-12">
<div class="caja">
<h4>¿Por qué se hizo?</h4>
<p>
Este proyecto nace de observar una necesidad clara en nuestra propia comunidad: la falta de un canal ordenado para que los vecinos informen sobre problemas de infraestructura, limpieza o servicios básicos al COCODE. Actualmente, muchos reportes se hacen de palabra o se quedan en mensajes aislados, lo que provoca que las solicitudes se olviden o no se les dé el seguimiento correcto.
</p>
</div>
</div>

</div>


</div>


</body>
</html>