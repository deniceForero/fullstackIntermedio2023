<?php    
session_start();


$url_base="http://localhost:90/EntregaTodos_a_la_U/";

if(!isset($_SESSION["nombreapellido"])){

    header("location:".$url_base."login.php");
}

?>



<!doctype html>
<html lang="en">

<head>
  <title>App Denice</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../img/faviconverde.png">
  <link rel="stylesheet" href="/EntregaTodos_a_la_U/style.css"/>

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>

  <nav class="navbar navbar-expand navbar-light bg-light">
      <ul class="nav navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">Sistema Web <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>calculadora.php/">1.Calculadora</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>edad.php/">2.Edad</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>datos.php/">3.Datos</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>mostrardatos.php/">3.1Mostrar Datos</a>
          </li>


          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>validarEdad.php/">4.ValidarEdad</a>
          </li>


          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>/usuarios/indexusuarios.php">5.Usuarios</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>cerrar.php">Cerar Sesión</a>
          </li>
      </ul>
  </nav>
  <main class= "container">

<?php if(isset($_GET['mensaje'])){ ?>
    <script>
      Swal.fire({icon: "success", title: "<?php echo $_GET['mensaje'];?>"});
    </script>
<?php } ?>
