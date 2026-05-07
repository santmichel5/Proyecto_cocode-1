
<?php
include("conexion.php");

include("session.php");



$Cargo = $_POST["TxtCargo"];

$sql = "INSERT INTO cocode_bd.cargos (nombre_cargo)
        VALUES ('$Cargo')";

$resultado = mysqli_query($conect, $sql);

if ($resultado) {
    echo "Datos ingresados correctamente";
     header("Location: cargos_form.php");
} else {
    echo "Error al ingresar datos";
}
?>