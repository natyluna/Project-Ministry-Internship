<?php

function Guardar(){
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

    if(!validaRequerido($nombre)){return alerta("Ingresa un Nombre",false);};
    if(!validaRequerido($apellido)){return alerta("Ingresa un Apellido",false);};
    if(!validaRequerido($dni)){return alerta("Ingresa un DNI",false);};
    if(!validaRequerido($email)){return alerta("Ingresa un EMAIL",false);};
    if(!validaEmail($email)){return alerta("Ingresa un EMAIL Valido",false);};
    if(!validaRequerido($nacimiento)){return alerta("Ingresa una Fecha de Nacimiento",false);};
    if(!validaRequerido($telefono)){return alerta("Ingresa un Telefono",false);};
    if(!validaRequerido($nacionalidad)){return alerta("Ingresa una Nacionalidad",false);};
    if(!validaRequerido($latitud)){return alerta("Ingresa una Latitud",false);};
    if(!validaRequerido($longitud)){return alerta("Ingresa un Logitud",false);};


    $query = "INSERT INTO personas(dni,nombre,apellido,fecha_nac,telefono,correo,nacionalidad,sexo,latitud,longitud) VALUES ('$dni','$nombre','$apellido','$nacimiento','$telefono','$email','$nacionalidad','$sexo','$latitud','$longitud')";
    if ($con->query($query) === true) {
        alerta('DATOS CARGADOS CORRECTAMENTE!!');
        $con = null;
    } else {
        die("<div class='bg-danger p-4 mt-4 rounded'> <p class='text-white'>*error al cargar los datos" . $con->error."</p> </div>");
        $con = null;
    }
}
