<?php

function Guardar(){
    include_once('funciones/conexion.php');

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

    $query = "INSERT INTO u283354621_diag_ministeri.PERSONAS(dni,nombre,apellido,fecha_nac,telefono,correo,nacionalidad,sexo,latitud,longitud) VALUES ('$dni','$nombre','$apellido','$nacimiento','$telefono','$email','$nacionalidad','$sexo','$latitud','$longitud')";
    if ($con->query($query) === true) {
        echo("<div class='bg-success p-4 mt-4 rounded'> <p class='text-white'>*Se guardaron los datos Correctamente</p> </div>");
    } else {
        die("<div class='bg-danger p-4 mt-4 rounded'> <p class='text-white'>*error al cargar los datos" . $con->error."</p> </div>");
    }
}
