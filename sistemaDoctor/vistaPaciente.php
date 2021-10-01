<?php
    session_start();
    $usuario= $_SESSION['username'];
    $nombre=$_SESSION['nombres'];
    $rol=$_SESSION['rol'];

    if (!isset($usuario)) {
        header("location: index.php");
    }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/estilosCustom.css">
  <title>Sistema</title>
</head>

<body>

  <!-- Inicio NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Sistema Doctores</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="vistaPaciente.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="citas.php">Citas</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-light my-2 my-sm-0" href="">Ver Perfil</a>
        <a class="btn btn-light my-2 my-sm-0 ml-3" href="php/logout.php">Cerrar Sesión</a>
      </div>
    </div>
  </nav>
  <!-- FINAL NAVBAR -->

  <!--INICIO MAIN -->
  <div class="container-fluid" id="main">

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Bienvenido <?php echo "$nombre"?>! </h1>
        <p class="lead">Este Espacio esta diseñado para el rol de <?php print_r($rol)?> </p>
        <p class="lead">Fecha: <?php echo date('l \t\h\e jS'); ?></p>
      </div>
    </div>
    <div class="container text-center">
      <span class="display-4 ">Actividades</span>
      <div class="row mt-4">
        <div class="col-6 col-sm-6 btn btn-1" onclick="location.href='citas.php'">
          <a href="citas.php" class="p-2" style="text-decoration: none; color:#282A35;">
            <i class="far fa-envelope fa-7x "></i>
            <h4 class="text-uppercase" style="color:#282A35;">Citas</h4>
          </a>
        </div>

        <div class="col-6 col-sm-6 btn btn-2" onclick="location.href='citas.php'">
          <a href="citas.php" style="text-decoration: none; color:#282A35;">
            <i class="far fa-hospital fa-7x m-2"></i>
            <h4 class="text-uppercase">Sucursales</h4>
          </a>
        </div>

        <!-- Force next columns to break to new line -->
        <div class="w-100"></div>

        <div class="col-6 col-sm-6 btn btn-3" onclick="location.href='citas.php'">
          <a href="citas.php" style="text-decoration: none; color:#282A35;">
            <i class="fas fa-user fa-7x p-3"></i>
            <h4 class="text-uppercase">Mi Perfil</h4>
          </a>
        </div>

        <div class="col-6 col-sm-6 btn-4" onclick="location.href='citas.php'">
          <a href="citas.php" style="text-decoration: none; color:#282A35;">
            <i class="fas fa-phone-volume fa-7x p-3"></i>
            <h4 class="text-uppercase">Call Center</h4>
          </a>
        </div>
      </div>

    </div>

    <br>
    <br>
    <!--INICIO Footer -->
    <div class="container-fluid p-3" style="background-color: #D9EEE1;">
      <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">
          © 2021 Copyright: Los Doctores S.A de C.V
        </div>
      </footer>
    </div>
    <!--FIN Footer -->

  </div>
  <!--FIN MAIN -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>

</html>