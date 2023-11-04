<?php include("./bd.php"); ?>

<?php include("./templete/header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/EntregaTodos_a_la_U/style.css" /> 
    <title>Validar Edad</title>
</head>

<body>
    <h1>Validar Datos Edad</h1>

    <form class="form" action="" method="post">

        <div class="mb-3">
            <label for="nacimiento" class="form-label">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" name="nacimiento" id="nacimiento" required placeholder="Escribe tu fecha de nacimiento AAAA-MM-DD">
        </div>

        <input name="submit" id="" class="btn btn-primary" type="submit" value="Enviar">
        <br><br>

    </form>

</body>

<?php

$edad="";


if (isset($_POST["submit"])) {
    
    $nacimiento= (isset($_POST["nacimiento"])?$_POST["nacimiento"]:"");
    /*$nacimiento = $_POST["nacimiento"];*/
    $hoy = date("Y-m-d");
    

    $edad1 = strtotime($hoy) - strtotime($nacimiento);
 
    $edad =  intval($edad1 / 60 / 60 / 24 / 365.25); /* para que quede un número pequeño 60 seg, 60 min, 24 horas,365.25 días del año incluido el bisiesto*/
    
    
    
}

if ($edad >= "18") {

    echo "Su edad es: " . $edad . " años, por tanto es mayor de edad";
} else {

    echo "Su edad es: " . $edad . "  años, por tanto es menor de edad";
}

?>


</html>

<?php include("./templete/footer.php"); ?>