<?php

/*Archivo de conexion a base de datos*/

$servidor="localhost";
$usuario= "root";
$password="";
$db="full_stack_intermedio";


$conexion= new mysqli ("$servidor","$usuario","$password","$db");

if ($conexion->connect_errno){
    echo "Error de conexión";
    exit();

}else{
   /* echo "Si se conectó a la  DB";*/
}


?>