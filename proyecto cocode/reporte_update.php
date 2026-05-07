<?php
include("conexion.php");
include("session.php");

if (!isset($_POST["TxtId"])) {
    
    exit;
}

$NId = $_POST["TxtId"];
$Estado = $_POST["SelectEstado"];
$Importancia = $_POST["SelectImportancia"];
$Usercoco = $_POST["SelectUser"];

$sql = "UPDATE cocode_bd.reportes 
        SET Estado_reporte_idEstado_reporte='$Estado',
            Importancia_idImportancia='$Importancia',
            User_cocode_idUser_cocode='$Usercoco'
        WHERE idreportes='$NId'";

$resultado = mysqli_query($conect, $sql);

if ($resultado) {
    echo "Datos ingresados correctamente";
     header("Location: reporte_listar.php");
} else {
    echo "Error al ingresar datos";
}

?>