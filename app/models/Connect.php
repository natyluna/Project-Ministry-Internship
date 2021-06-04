<?php
    class conection {
        public static function Conectar(){
            define('servidor','localhost:8080');
            define('nombre_bd','name');
            define('usuario','root');
            define('password','');
            
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            
            try{
              $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $opciones);
              return $conexion;
            }catch(Exception $e){
              die("El error de conexión es: ".$e->getMessage());
              }
             }
            }

?>