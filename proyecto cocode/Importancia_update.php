<?php
include("conexion.php");
include("session.php");




$NId = $_POST["TxtId"];
$Importancia =$_POST["TxtImportancia"];




$sql = "Update cocode_bd.importancia set Tipo_importancia ='$Importancia' Where idImportancia='$NId';";

$resultado = mysqli_query($conect, $sql);

if ($resultado) {
    echo "Datos ingresados correctamente";
} else {
    echo "Error al ingresar datos";
}

header("Location: Importancia_listar.php");
?>