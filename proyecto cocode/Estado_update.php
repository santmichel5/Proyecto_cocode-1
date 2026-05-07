<?php
include("conexion.php");

include("session.php");




$NId = $_POST["TxtId"];
$Estado =$_POST["TxtEstado"];




$sql = "Update cocode_bd.estado_reporte set Nombre_estado ='$Estado' Where idEstado_reporte='$NId';";

$resultado = mysqli_query($conect, $sql);

if ($resultado) {
    echo "Datos ingresados correctamente";
} else {
    echo "Error al ingresar datos";
}

header("Location: Estado_listar.php");
?>