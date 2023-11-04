<?php include("../bd.php"); //conexión base datos


if($_POST) //recibir datos del formulario

{
    //print_r($_POST);  
    //Se recolectan los datos del método POST
    $nombredelusuario=(isset($_POST["nombreapellido"])?$_POST["nombreapellido"]:"");
    $cedula=(isset($_POST["cedula"])?$_POST["cedula"]:"");
    $password=(isset($_POST["password"])?$_POST["password"]:"");
    $correo=(isset($_POST["correo"])?$_POST["correo"]:"");
    //Preparar los datos para insertar en la base de datos
    $sentencia=$conexion->prepare("INSERT INTO usuarios(id,nombreapellido,cedula,password,correo) VALUES (null,:nombreapellido,:cedula,:password,:correo)");
    //Asignado los valores del método POST (Lo que llega del formulario)
    $sentencia->bindParam(":nombreapellido",$nombredelusuario);
    $sentencia->bindParam(":cedula",$cedula);
    $sentencia->bindParam(":password",$password);
    $sentencia->bindParam(":correo",$correo);
    $sentencia->execute();
    $mensaje="Registro Agregado";
    header("location:indexusuarios.php?mensaje=".$mensaje);
    
}

?>
<?php include("../templete/header.php");?>

</br>

<div class="card">
    <div class="card-header">
        Datos del usuario
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="nombreapellido" class="form-label">Nombre del Usuario</label>
              <input type="text"
                class="form-control" name="nombreapellido" id="nombreapellido" aria-describedby="helpId" placeholder="Nombre del Usuario">
            </div>

            <div class="mb-3">
              <label for="cedula" class="form-label">Cédula</label>
              <input type="text"
                class="form-control" name="cedula" id="cedula" aria-describedby="helpId" placeholder="Cédula">
            </div>



            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password"
                class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Digite su contraseña">
              
            </div>
            
            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email"
                class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Escriba su correo">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="indexusuarios.php" role="button">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted">    
    </div>
</div>

<?php include("../templete/footer.php");?>