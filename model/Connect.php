<?php

    //MODELO DE APERTURA BBDD

    $mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";

    $mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    echo $mysqli->host_info . "\n";

    //OTRO CULIAO QUE NO ME SALEEEEE LPTM


?>