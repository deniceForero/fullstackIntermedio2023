<?php
include("../bd.php");


if(isset($_GET['txtID']))
{

    $txtID=(isset($_GET['txtID'])?$_GET['txtID']:"");
  
    $sentencia=$conexion->prepare("SELECT * FROM usuarios WHERE id= :id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $nombreusuario=$registro["nombreapellido"];
    $cedula=$registro["cedula"];
    $password=$registro["password"];
    $correo=$registro["correo"];

}


if($_POST) //recibir datos del formulario

{
    //print_r($_POST);  
    //Se recolectan los datos del método POST
    $txtID=(isset($_POST['txtID'])?$_POST['txtID']:"");
    $nombredelusuario=(isset($_POST["nombreapellido"])?$_POST["nombreapellido"]:"");
    $cedula=(isset($_POST["cedula"])?$_POST["cedula"]:"");
    $password=(isset($_POST["password"])?$_POST["password"]:"");
    $correo=(isset($_POST["correo"])?$_POST["correo"]:"");
    //Preparar los datos para insertar en la base de datos
    $sentencia=$conexion->prepare("UPDATE usuarios SET nombreapellido=:nombreapellido, cedula=:cedula,password=:password,correo=:correo WHERE id=:id");
    //Asignado los valores del método POST (Lo que llega del formulario)
    $sentencia->bindParam(":nombreapellido",$nombredelusuario);
    $sentencia->bindParam(":cedula",$cedula);
    $sentencia->bindParam(":password",$password);
    $sentencia->bindParam(":correo",$correo);
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $mensaje="Registro Actualizado";
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
            <label for="txtID" class="form-label">ID:</label>
            <input type="text"
            value = "<?php echo $txtID;?>" 
                class="form-control" redonly name="txtID" id="txtID"  placeholder="ID">
            
            </div>

            <div class="mb-3">
              <label for="nombreapellido" class="form-label">Nombre del Usuario</label>
              <input type="text"
              value = "<?php echo $nombreusuario;?>"
                class="form-control" name="nombreapellido" id="nombreapellido"  placeholder="Nombre del Usuario">
            </div>

            <div class="mb-3">
              <label for="cedula" class="form-label">Cédula</label>
              <input type="text"
              value = "<?php echo $cedula;?>"
                class="form-control" name="cedula" id="cedula"  placeholder="Cédula">
            </div>


            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password"
              value = "<?php echo $password;?>"
                class="form-control" name="password" id="password"  placeholder="Digite su contraseña">
              
            </div>
            
            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email"
              value = "<?php echo $correo;?>"
                class="form-control" name="correo" id="correo"  placeholder="Escriba su correo">
            </div>

            <button type="submit" class="btn btn-success">Actualizar Registro</button>
            <a name="" id="" class="btn btn-primary" href="indexusuarios.php" role="button">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted">    
    </div>
</div>


<?php include("../templete/footer.php");?>