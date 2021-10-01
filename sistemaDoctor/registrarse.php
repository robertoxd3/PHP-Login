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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />

  <title>Sistema</title>
  <style>
    #main {
      padding-right: 0;
      padding-left: 0;
      background-color: #282A35;
    }
  </style>
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
        <li class="nav-item ">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-light my-2 my-sm-0" href="index.php">Iniciar Sesión</a>
        <a class="btn btn-light my-2 my-sm-0 ml-3" href="registrarse.php">Registrarse</a>
      </div>
    </div>
  </nav>
  <!-- FINAL NAVBAR -->

  <!--INICIO MAIN -->
  <div class="container-fluid" id="main">
    <div class="container py-4">
      <header class="pb-3 mb-4 border-bottom">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
          <img src="https://www.svgrepo.com/show/90652/doctor.svg" width="50" height="32"></img>
          <span class="fs-4 ps-3 text-white">Proceso de Registro</span>
        </a>
      </header>
    </div>

    <!--INICIO Formulario -->

    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form name="RegistroForm" id="RegistroForm" method="post" action="" enctype="multipart/form-data"
            class="text-center">
            <div class="container"
              style="background-color: #E9ECEF; padding-top: 32px; padding-bottom: 32px; border-radius: 16px;">
              <legend class="text-center mb-4"> Formulario de Creación de Cuenta </legend>

              <div class="form-group" style="width:90%; margin: 0 auto; text-align: center">
                <label class="sr-only" for="username"> Nombre Usuario</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span><i class="fas fa-user"></i></span>
                    </div>
                  </div>
                  <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre Usuario"
                    required>
                </div>
                <br>
                <label class="sr-only" for="username"> Correo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span><i class="fas fa-user"></i></span>
                    </div>
                  </div>
                  <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo Electronico"
                    required>
                </div>
                <br>
                <label class="sr-only" for="contra"> contra</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span><i class="fas fa-key"></i></span>
                    </div>
                  </div>
                  <input type="password" class="form-control" name="contra" id="contra" placeholder="Contraseña"
                    required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Crear Cuenta</button>
                <br>
                <small style="color:darkgray">Al hacer click en el botón de registro, tu estás aceptando nuestros
                  términos y
                  condiciones, y Políticas de Privacidad</small>
                <hr>
                <span> Ya tienes cuenta? <a href="index.php"> Inicia Sesión </a></span>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--FIN Formulario -->

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
  <script type="text/javascript" src="js/registrarse.js"></script>

</body>

</html>