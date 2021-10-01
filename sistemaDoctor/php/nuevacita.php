<?php
   require('conexion.php');
   
   //Credenciales Mysql
     
    $idUsuario=$_POST['idusu'];
    $fecha =$_POST['fecha'];
    $horario= $_POST['horario'];
    $motivo= $_POST['motivo'];

    $sql="INSERT into citas(idUsuario, fecha, horario, motivo) VALUES ('$idUsuario','$fecha','$horario','$motivo')";
    //$result =  $db->query($sql);

    if ($db->query($sql)) {
        echo json_encode(1);
        exit;
    } else {
        echo json_encode(0);
    }
