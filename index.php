<?php 
include_once './model/Connect.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

print_r($conexion);

echo "PRUEBA"

?>
