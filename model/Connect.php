<?php

    class conection {
        public static conexion(){
            $mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
            return $mysqli;
        }
    }

?>