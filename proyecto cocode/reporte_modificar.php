<?php
include("session.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>

    <!-- Bootstrap (para form-control) -->
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
            max-width: 700px;
            margin: auto;
        }

        .espacio{
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="barra"></div>

<h1 class="titulo">Modificar Reporte</h1>

<div class="caja espacio">
<?php
include("conexion.php");

$id = $_GET['var1'];

$sql = "SELECT idreportes
        FROM cocode_bd.reportes 
        WHERE idreportes = '$id'";

$resultado = mysqli_query($conect, $sql);

while ($fila = mysqli_fetch_array($resultado)) {
?>
    <form action="reporte_update.php" method="POST" enctype="multipart/form-data">

        <label>ID</label>
        <input type="number" class="form-control" name="TxtId" value="<?php echo $fila[0]; ?>" readonly><br>

       
    <select name="SelectEstado" required>
        <option value="">Seleccione Estado</option>
        <?php
        include("conexion.php");

        $sql = "SELECT idEstado_reporte,Nombre_estado
                FROM cocode_bd.estado_reporte";

        $resultado = mysqli_query($conect, $sql);

        while ($fila = mysqli_fetch_array($resultado)) {
        ?>
            <option value="<?php echo $fila[0]; ?>">
                <?php echo $fila[1]; ?>
            </option>
        <?php
        }
        ?>
    </select>
    <br><br>

     <select name="SelectImportancia" required>
    <option value="">Seleccione importancia</option>
    <?php
    include("conexion.php");

    $sql1 = "SELECT idImportancia,Tipo_importancia
             FROM cocode_bd.importancia";

    $resultado2 = mysqli_query($conect, $sql1);

    while ($fila = mysqli_fetch_array($resultado2)) {
    ?>
        <option value="<?php echo $fila[0]; ?>">
            <?php echo $fila[1]; ?>
        </option>
    <?php
    }
    ?>
</select>

<br><br>

<select name="SelectUser" required>
    <option value="">Seleccione quien modifico</option>
    <?php
    include("conexion.php");

    $sql3 = "SELECT idUser_cocode,Nombre
             FROM cocode_bd.user_cocode";

    $resultado3 = mysqli_query($conect, $sql3);

    while ($fila = mysqli_fetch_array($resultado3)) {
    ?>
        <option value="<?php echo $fila[0]; ?>">
            <?php echo $fila[1]; ?>
        </option>
    <?php
    }
    ?>
</select>


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