<?php
    if (!empty($_POST)) {
        if (empty($_POST['usuario']) || empty($_POST['contra'])) {
            $alert='Ingrese su usuario y su contraseña';
        } else {
            require('conexion.php');
            $nombre_usuario=$_POST['usuario'];
            $contra =$_POST['contra'];
            $verificar = $db->query("SELECT * FROM usuario WHERE nombre='$nombre_usuario' AND password='$contra'");
            $resultado= mysqli_num_rows($verificar);
            echo json_encode($resultado);
            if ($resultado>0) {
                $data=mysqli_fetch_array($verificar);
                session_start();
                $_SESSION['active']=true;
                $_SESSION['iduser']=$data['idUsuario'];
                $_SESSION['nombres']=$data['nombre'];
                $_SESSION['contra']=$data['password'];
                $_SESSION['correo']=$data['correo'];
                $_SESSION['rol']=$data['rol'];
                $_SESSION['username']=$nombre_usuario;
                ;
            } else {
            }
        }
    }
