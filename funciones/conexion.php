<?php 
require_once('config/Config.php');

$con = new mysqli(SERVIDOR_DB, USUARIO_DB, PASSWORD_DB, NOMBRE_DB)
    or die ('no se pudo conectar a la base de datos' . mysqli_connect_error());
    mysqli_set_charset($con,"utf8");
?>