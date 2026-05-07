<?php
include("conexion.php");


$Nombre_reporte = $_POST["TxtNombreReporte"];
$Ubicacion =$_POST["TxtUbicacion"];
$Fecha = $_POST["TxtFecha"];
$Descripcion = $_POST["TxtDescripcion"];
$Nombre_reportante = $_POST["TxtNombre"];
$Apellido = $_POST["TxtApellido"];
$Telefono = $_POST ["TxtTelefono"];



$nombreImagen = $_FILES['img']['name'];



$temporal = $_FILES['img']['tmp_name'];

$ruta = "imagenes/".$nombreImagen;


move_uploaded_file($temporal, $ruta);


$sql = "INSERT INTO cocode_bd.reportes (nombre_reporte,ubicacion,descripcion,fecha_reporte,Img_reporte,Nombre_reportante,Apellido_reportante,Numero_de_telefono)
        VALUES ('$Nombre_reporte','$Ubicacion','$Descripcion','$Fecha','$ruta','$Nombre_reportante','$Apellido','$Telefono')";

$resultado = mysqli_query($conect, $sql);

if ($resultado) {
    echo "Datos ingresados correctamente";
    header("Location: cargos_listar.php");
    


} else {
    echo "Error al ingresar datos";
}
?>
