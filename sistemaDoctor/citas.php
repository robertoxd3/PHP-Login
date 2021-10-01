<?php
        session_start();
        $usuario= $_SESSION['username'];
        $nombre=$_SESSION['nombres'];
        $rol=$_SESSION['rol'];
        $idUsuario=$_SESSION['iduser'];

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
  <div class="container" id="main">
    <div class="row mt-4">
      <div class="col-12">
        <h1 class="display-4">Citas de <?php echo "$nombre"?>! </h1>
      </div>
      <div class="col-12">
        <span class="lead float-right">Cupo Disponible: <span id="cupoDisponible"></span> </span>
      </div>
      <br><br>
      <div class="row w-100">
        <div class="col-12 col-md-4 mt-3">
          <div class="card">
            <h5 class="card-header white-text text-center py-4">
              <strong>Creación de Nueva Cita</strong>
            </h5>
            <!--Card content-->
            <div class="card-body pt-0">
              <!-- Form -->
              <form name="CitasForm" id="CitasForm" method="post" action="" enctype="multipart/form-data"
                class="text-center" style="color: #757575;">

                <!-- ID -->
                <div class="form mt-3">
                  <label for="idusu">Usuario</label>
                  <input type="text" id="idusu1" name="idusu1" class="form-control" value="<?php echo "$idUsuario"?>"
                    disabled>
                  <input type="text" id="idusu" name="idusu" class="form-control" value="<?php echo "$idUsuario"?>"
                    hidden>
                </div>
                <!-- FECHA -->
                <div class="form mt-3">
                  <label for="fecha">Fecha</label>
                  <input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo date("Y-m-d");?>"
                    required>
                </div>
                <br>
                <!-- HORARIO -->
                <label class="">Horario de la cita</label>
                <div class="form mr-xl-2">
                  <select class="select form  dropdown-primary form-control " id="horarios" name="horario">
                    <option value="" disabled>Elige una opción</option>
                    <option value="9:00-9:30">9:00-9:30</option>
                    <option value="9:30-10:00">9:30-10:00</option>
                    <option value="10:00-10:30">10:00-10:30</option>
                    <option value="10:30-11:00">10:30-11:00</option>
                    <option value="13:00:13:30">13:00:13:30</option>
                    <option value="13:30-14:00">13:30-14:00</option>
                    <option value="14:00-14:30">14:00-14:30</option>
                    <option value="14:30-15:00">14:30-15:00</option>
                    <option value="15:00-15:30">15:00-15:30</option>
                    <option value="15:30-16:00">15:30-16:00</option>
                  </select>
                </div>
                <!--MOTIVO -->
                <div class="form mt-3">
                  <label for="motivo">Motivo de la Cita</label>
                  <textarea id="motivo" name="motivo" class="form-control md-textarea" rows="3" required></textarea>
                </div>
                <br>
                <!-- Send button -->
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4" id="btnRegistrar"
                  name="submit" style="display: block;">Registrar Cita</button>
                <span id="cupoMax" class="font-weight-bold text-monospace" style="display: none;">Se Alcanzo el número
                  de
                  citas maximo para el dia de ahora , intente nuevamente mañana</span>
              </form>
              <!-- Form -->
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8 mt-3">
          <div class="table table-responsive table-hover">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th>ID CITA</th>
                  <th>Usuario</th>
                  <th>Fecha</th>
                  <th>Horario</th>
                  <th>Motivo</th>
                </tr>
              </thead>

              <?php
              //Traer conexion con la variable bd
              require('php/conexion.php');
              $sql="SELECT * from citas where idUsuario=$idUsuario";
              $result=mysqli_query($db, $sql);

              while ($mostrar=mysqli_fetch_array($result)) {?>

              <tr>
                <td><?php echo $mostrar['idCita'] ?></td>
                <td><?php echo $mostrar['idUsuario'] ?></td>
                <td><?php echo $mostrar['fecha'] ?></td>
                <td><?php echo $mostrar['horario'] ?></td>
                <td><?php echo $mostrar['motivo'] ?></td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
        <?php
        $numFilas= mysqli_num_rows($result);
        if ($numFilas==0) {
            echo '<h5>No ha realizado ninguna cita</h5>';
        }
        ?>
      </div>


    </div>
    <!--FIN CONTAINER -->
    <br>



  </div>
  <!--FIN MAIN -->
  <!--INICIO Footer -->
  <div class="container-fluid p-3" style="background-color: #D9EEE1;">
    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3">
        © 2021 Copyright: Los Doctores S.A de C.V
      </div>
    </footer>
  </div>
  <!--FIN Footer -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="js/nuevaCita.js"></script>
  <script type="text/javascript" src="js/cupo.js"></script>
  <script>
    let cupotemp = localStorage.getItem('cupo');
    if (cupotemp == null) {
      localStorage.setItem('cupo', 10)
    }
    let cupoActual = localStorage.getItem('cupo');
    document.getElementById('cupoDisponible').innerHTML = cupoActual;

    if (cupoActual == 0) {
      document.getElementById('btnRegistrar').style.display = 'none';
      document.getElementById('cupoMax').style.display = 'block';
    } else {
      document.getElementById('btnRegistrar').style.display = 'block';
      document.getElementById('cupoMax').style.display = 'none';
    }
  </script>
</body>

</html>