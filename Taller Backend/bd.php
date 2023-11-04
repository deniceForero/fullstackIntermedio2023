<?php

$servidor="localhost";
$baseDeDatos="mi_proyecto";
$usuario="root";
$contrasena="";

try{

    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasena);
    

}catch(Exception $ex){
    echo $ex->getMessage();
}


?>
