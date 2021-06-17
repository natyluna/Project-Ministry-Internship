<?php

function MostrarPersonas()
{
    include_once('funciones/conexion.php');

    try {
        $query = $con->prepare("SELECT * FROM personas");
        $query->execute();
        $datos = $query->fetchAll();
        return $datos;
    } catch (PDOException $e) {
        alerta("ERROR AL MOSTRAR LOS DATOS: $e");
    }
}

function Guardar()
{
    include_once('funciones/conexion.php');
    include_once('funciones/validaciones.php');
    include_once('funciones/masterfunctions.php');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $nacimiento = $_POST['nacimiento'];
    $telefono = $_POST['telefono'];
    $nacionalidad = $_POST['nacionalidad'];
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];
    $sexo = $_POST['sexo'];

    //VALIDACIONES
    (!validaRequerido($nombre)) && alerta("Campo nombre vació, ingrese el nombre", false);
    (!soloLetras($nombre)) && alerta("El nombre solo permite letras, ingrese un nombre valido", false);
    (!validaRequerido($apellido)) && alerta("Campo apellido vacio, ingrese el apellido", false);
    (!soloLetras($apellido)) && alerta("El apellido solo permite letras, ingrese un apellido valido", false);
    (!validaRequerido($dni)) && alerta("Campo DNI vacio, ingrese el DNI", false);
    (!validarCant($dni, 7)) && alerta("El DNI permite minimo 7 digitos, ingrese un DNI valido", false);
    (!validaRequerido($email)) && alerta("Campo email vacio, ingrese un email", false);
    (!validaEmail($email)) && alerta("El email debe incluir un @, ingrese un email valido", false);
    (!validaRequerido($nacimiento)) && alerta("Ingrese la Fecha de Nacimiento", false);
    (!validaRequerido($telefono)) && alerta("Campo telefono vacio, ingrese un telefono", false);
    (!validarCant($telefono, 10)) &&  alerta("El  telefono requiere minimo 10 digitos, ingrese un telefono valido", false);
    (!validaRequerido($nacionalidad))  && alerta("Seleccione una Nacionalidad", false);
   
    try {
        $sql = "INSERT INTO personas(dni,nombre,apellido,fecha_nac,telefono,correo,nacionalidad,sexo,latitud,longitud) VALUES ('$dni','$nombre','$apellido','$nacimiento','$telefono','$email','$nacionalidad','$sexo','$latitud','$longitud')";
        $con->exec($sql);
        alerta('DATOS CARGADOS CORRECTAMENTE!!');
    } catch (PDOException $e) {
        alerta("ERROR AL CARGAR LOS DATOS!!: $e", false);
    }
}

