<?php 
require_once('config/Config.php');

$con = new PDO("mysql:host=".SERVIDOR_DB.";dbname=".NOMBRE_DB,USUARIO_DB,PASSWORD_DB,array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ));

?>