<?php
session_start();
include("conexion.php");

$usuario = $_POST['TxtUsuario'];
$pass    = $_POST['TxtPass'];

$sql = "SELECT *  FROM cocode_bd.user_cocode WHERE Nombre = '$usuario' AND pass = '$pass'";

$resultado = mysqli_query($conect, $sql);

if(mysqli_num_rows($resultado) > 0){
    $_SESSION['user']="1";


    header("Location: reporte_listar.php");
}
?>