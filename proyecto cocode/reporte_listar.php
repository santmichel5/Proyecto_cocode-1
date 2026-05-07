<?php
include("session.php");
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Reportes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #eef2f7;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            background: #1e3c72;
            border-bottom: 3px solid white;
        }

        .menu a {
            color: white;
            text-decoration: none;
            margin: 0 25px;
            font-size: 18px;
            padding-bottom: 5px;
            border-bottom: 2px solid white;
        }

        .salir {
            margin-left: 20px;
            margin-top: 10px;
        }

        .titulo {
            text-align: center;
            margin-top: 25px;
            font-size: 35px;
            color: #1e3c72;
        }

        .caja {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0px 4px 10px gray;
            transition: 0.3s;
        }

        .caja:hover {
            transform: scale(1.02);
        }

        .espacio {
            margin-top: 30px;
        }
    </style>
</head>

<body>

<?php

if (isset($_GET['resultado1'])) {
    $id_eliminar = $_GET['resultado1'];

    $sql_update = "UPDATE cocode_bd.reportes
                   SET activo = 0
                   WHERE idreportes = $id_eliminar";

    mysqli_query($conect, $sql_update);
}
?>

<nav class="navbar">
    <div class="container d-flex justify-content-center menu">
        <a href="reporte_listar.php">Reportes</a>
    
        <a href="Importancia_form.php">Importancia</a>
        <a href="Estado_form.php">Estado</a>
    </div>
</nav>

<div class="salir">
    <form action="cerrar.php" method="post">
        <button type="submit" class="btn btn-danger">Salir</button>
    </form>
</div>

<div class="container-fluid espacio">
    <h1 class="titulo">Lista de Reportes</h1>

    <div class="caja mt-4">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">

                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nombre del reporte</th>
                        <th>Ubicación</th>
                        <th>Fecha</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                        <th>Importancia</th>
                        <th>Estado</th>
                        <th>Verificado por</th>
                    </tr>
                </thead>

                <tbody>
<?php
$sql_reportes = "
SELECT
    r.idreportes,
    r.nombre_reporte,
    r.ubicacion,
    r.fecha_reporte,
    r.Img_reporte,
    r.descripcion,
    r.Nombre_reportante,
    r.Apellido_reportante,
    r.Numero_de_telefono,
    i.Tipo_importancia,
    e.Nombre_estado,
    u.Nombre
FROM cocode_bd.reportes AS r
LEFT JOIN cocode_bd.importancia AS i
    ON r.Importancia_idImportancia = i.idImportancia
LEFT JOIN cocode_bd.estado_reporte AS e
    ON r.Estado_reporte_idEstado_reporte = e.idEstado_reporte
LEFT JOIN cocode_bd.user_cocode AS u
    ON r.User_cocode_idUser_cocode = u.idUser_cocode
WHERE r.activo = 1
ORDER BY r.idreportes DESC
";

$res_reportes = mysqli_query($conect, $sql_reportes);

while ($reg = mysqli_fetch_array($res_reportes)) {
    $id_actual = $reg[0];
?>
                    <tr>
                        <td><?php echo $reg[0]; ?></td>
                        <td><?php echo $reg[1]; ?></td>
                        <td><?php echo $reg[2]; ?></td>
                        <td><?php echo $reg[3]; ?></td>
                        <td><img src="<?php echo $reg[4]; ?>" width="75px" height="75px"></td>
                        <td><?php echo $reg[5]; ?></td>
                        <td><?php echo $reg[6]; ?></td>
                        <td><?php echo $reg[7]; ?></td>
                        <td><?php echo $reg[8]; ?></td>

                        <td>
                            <a href="reporte_modificar.php?var1=<?php echo $id_actual; ?>">
                                <button class="btn btn-primary btn-sm">Modificar</button>
                            </a>
                        </td>

                        <td>
                            <a href="reporte_listar.php?resultado1=<?php echo $id_actual; ?>"
                               onclick="return confirm('¿Seguro que desea eliminar este reporte?');">
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </a>
                        </td>

                        <td><?php echo $reg[9]; ?></td>
                        <td><?php echo $reg[10]; ?></td>
                        <td><?php echo $reg[11]; ?></td>
                    </tr>
<?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

</body>
</html>