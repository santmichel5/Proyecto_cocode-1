<?php
include("conexion.php");

include("session.php");




$Importancia = $_POST["TxtImportancia"];

$sql = "INSERT INTO cocode_bd.Importancia (tipo_importancia)
        VALUES ('$Importancia')";

$resultado = mysqli_query($conect, $sql);

if ($resultado) {
    echo "Datos ingresados correctamente";
     header("Location: Importancia_form.php");
} else {
    echo "Error al ingresar datos";
}
?>