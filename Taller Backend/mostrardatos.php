<?php include("./bd.php");?> 

<?php include("./templete/header.php");?>

<?php 



if(isset($_GET["nombre"])?$_GET["nombre"]:""); 
if(isset($_GET["apellido"])?$_GET["apellido"]:""); 
if(isset($_GET["cedula"])?$_GET["cedula"]:"");  

{


/*$nombre =$_GET["nombre"];
$apellido =$_GET["apellido"];
$cedula =$_GET["cedula"];*/

$nombre = (isset($_GET["nombre"])?$_GET["nombre"]:"");
$apellido = (isset($_GET["apellido"])?$_GET["apellido"]:"");
$cedula = (isset($_GET["cedula"])?$_GET["cedula"]:"");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/EntregaTodos_a_la_U/style.css"/>
    <title>Mostrar Datos</title>
</head>
<body>
    <h1>Mostrar Datos del Usuario</h1>


    <p class="parrafo"> <?php echo "Nombre: ". $nombre;?> </p>
    <p> <?php echo "Apellido: " .$apellido;?> </p>
    <p> <?php echo "Cédula: " .$cedula;?> </p>


    

    
</body>
</html>




<?php include("./templete/footer.php");?>