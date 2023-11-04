<?php

include "conexion.php";

if (isset($_POST['enviar'])){

    $nombre= $_POST['nombre'];
    $telefono= $_POST['telefono'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    $sql= mysqli_query($conexion, "INSERT INTO datos
    (nombre,telefono,correo,texto) VALUES ('$nombre','$telefono', '$email','$message')");

    header('location:../index.php');
}

?>