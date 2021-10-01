<?php
   //Credenciales Mysql
     
    $nombre=$_POST['usuario'];
    $contra =$_POST['contra'];
    $correo= $_POST['correo'];

            require('conexion.php');

             $sql="INSERT into usuario(nombre, password, correo, rol) VALUES ('$nombre','$contra','$correo','Paciente')";
            //$result =  $db->query($sql);
    
            if ($db->query($sql)) {
                //echo "Se ha subido correctamente el producto!";
                echo json_encode(1);
                exit;
            } else {
                echo json_encode(0);
                //echo "Ocurrio un error al subir el producto, Intente de nuevo!";
            }
       

 
 ?>



