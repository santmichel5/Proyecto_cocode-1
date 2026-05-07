<?php
include("conexion.php");

include("session.php");



$Estado = $_POST["TxtEstado"];

$sql = "INSERT INTO cocode_bd.estado_reporte (nombre_estado)
        VALUES ('$Estado')";

$resultado = mysqli_query($conect, $sql);

if ($resultado) {
    echo "Datos ingresados correctamente";


    header("Location: Estado_form.php");
}
?>