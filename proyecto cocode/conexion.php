<?php

$servidor = "localhost";
$usuario =  "root" ;
$password = "";
$bd = "cocode_bd";


$conect = mysqli_connect($servidor,$usuario,$password,$bd);

if(!$conect){
die("error" . mysqli_connect_error());

}else{
    
}   

?>