<?php include("./bd.php");?> 

<?php include("./templete/header.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/EntregaTodos_a_la_U/style.css" />
    <title>Calculadora</title>
</head>
<body>
<h1>Calculadora</h1>
<!--la acción se ejectura en la misma página-->
<form class="form" method="post" action="<?php $_SERVER["PHP_SELF"];?>">

<div class="mb-3">
  <label for="numero1" class="form-label">Número 1:</label>
  <input type="number"
    class="form-control" name="num1" id="num1" required placeholder="Escribe el primer número">
</div>

<div class="mb-3">
  <label for="numero2" class="form-label">Número 2:</label>
  <input type="number"
    class="form-control" name="num2" id="num2" required placeholder="Escribe el segundo número">
</div>


<div class="mb-3">
    <label for="" class="form-label">Operación:</label>
    <select class="form-select form-select-lg" name="operacion" id="">
        <option value="sumar" selected>Suma</option>
        <option value="restar">Resta</option>
        <option value="multiplicar">Multiplicación</option>
        <option value="dividir">División</option>
    </select>
</div>

<input name="submit" id="" class="btn btn-primary" type="submit" value="Calcular">
<br><br>

</form>


<?php 

if(isset($_POST["submit"])){

    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $operacion=$_POST["operacion"];

    switch($operacion){

        case "sumar":
            $resultado = $num1 + $num2;
            break;
    
    
        case "restar":
            $resultado = $num1 - $num2;
            break;
    
        case "multiplicar":
            $resultado = $num1 * $num2;
            break;
    
        case "dividir":
            $resultado = $num1 / $num2;
            break;
    
        default:
        $resultado = "Sin Resultado";
        break;
    
    
    }

    
    echo "El resultado de  ". $operacion." es igual a:  ".$resultado;

}

?>



</body>
</html>

<?php include("./templete/footer.php");?>