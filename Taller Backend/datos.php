<?php include("./bd.php");?> 

<?php include("./templete/header.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/EntregaTodos_a_la_U/style.css" />
    <title>Datos</title>
</head>
<body>
<h1>Datos Usuario</h1>

<form class="form"  action="../mostrardatos.php" method="get">

<div class="mb-3">
  <label for="nombre" class="form-label">Nombre:</label>
  <input type="text"
    class="form-control" name="nombre" id="nombre" required placeholder="Escribe tu nombre">
</div>

<div class="mb-3">
  <label for="apellido" class="form-label">Apellido:</label>
  <input type="text"
    class="form-control" name="apellido" id="apellido" required placeholder="Escribe tu apellido">
</div>

<div class="mb-3">
  <label for="cedula" class="form-label">Cédula:</label>
  <input type="number"
    class="form-control" name="cedula" id="cedula" required placeholder="Escribe tu cédula">
</div>

<input name="submit" id="" class="btn btn-primary" type="submit" value="Enviar">
<br><br>

</form>
   
</body>
</html>

<?php include("./templete/footer.php");?>