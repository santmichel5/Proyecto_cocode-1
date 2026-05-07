<?php
include("conexion.php");
include("session.php");




$NId = $_POST["TxtId"];
$Cargo =$_POST["TxtCargo"];




$sql = "Update cocode_bd.cargos set Nombre_cargo ='$Cargo' Where idCargos='$NId';";

$resultado = mysqli_query($conect, $sql);

if ($resultado) {
    echo "Datos ingresados correctamente";
} else {
    echo "Error al ingresar datos";
}

header("Location: cargos_listar.php");
?>