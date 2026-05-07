<?php
include("session.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Estado</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
            max-width: 500px;
            margin: auto;
        }

        .espacio{
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="barra"></div>

<h1 class="titulo">Modificar Estado del Reporte</h1>

<div class="caja espacio">
<?php
include("conexion.php");

$id = $_GET['var1'];

$sql = "SELECT * FROM cocode_bd.estado_reporte WHERE idEstado_reporte = '$id'";
$resultado = mysqli_query($conect, $sql);

while ($fila = mysqli_fetch_array($resultado)) {
?>
    <form action="Estado_update.php" method="POST">

        <label>ID</label>
        <input type="number" class="form-control" name="TxtId" value="<?php echo $fila[0]; ?>" readonly><br>

        <label>Modificar estado</label>
        <input type="text" class="form-control" name="TxtEstado" value="<?php echo $fila[1]; ?>"><br>

        <div class="text-center">
            <input type="submit" class="btn btn-primary px-5" value="Modificar">
        </div>

    </form>
<?php
}
?>
</div>

</body>
</html>