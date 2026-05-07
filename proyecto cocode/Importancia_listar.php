<?php
include("session.php");


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Importancia</title>

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

                 .btn-regresar{
    background: white;
    color:#1e3c72;
    border-radius:8px;
    padding:6px 14px;
    font-weight:500;
}

.btn-regresar:hover{
    background:#e0e0e0;
    color:#1e3c72;
}
    </style>
</head>

<body>
       <?php
include("conexion.php");

if($_GET){
    $id = $_GET['resultado1'];
$sql = "UPDATE cocode_bd.importancia SET activo = 0 WHERE idImportancia = $id";
$resultado1 = mysqli_query($conect, $sql);
}


?>


<div class="barra text-center text-white">
    <h2><i class="bi bi-exclamation-circle"></i> Sistema cocode asiste</h2>
</div>

<div class="container espacio">
    <h1 class="titulo">Lista de Importancia</h1>
 <a href="Estado_form.php" class="btn btn-regresar">
    <i class="bi bi-arrow-left"></i> Regresar
</a> 
    <div class="caja mt-4">
        <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-primary">
                <tr>
                    <th>ID Importancia</th>
                    <th>Tipo de Importancia</th>
                    <th>Modificar   </th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexion.php");

                $sql = "SELECT * FROM cocode_bd.importancia Where activo = 1 ORDER BY idImportancia DESC;";
                $resultado = mysqli_query($conect, $sql);

                while ($fila = mysqli_fetch_array($resultado)) {
                ?>
                    <tr>
                        <td><?php echo $fila[0]; ?></td>
                        <td><?php echo $fila[1]; ?></td>
                        <td><a href="Importancia_modificar.php?var1=<?php echo $fila['idImportancia']; ?>">  <button type="submit" class="btn btn-primary btn-lg">Modificar</button></a></td>
                          <td>
            <a href="Importancia_listar.php?resultado1=<?php echo $fila[0]; ?>"><button>Eliminar</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>