<?php
    //Credenciales Mysql
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'examen2atis';
    //Crear conexion con la base de datos
    $db = new mysqli($Host, $Username, $Password, $dbName);

    // Cerciorar la conexion
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
