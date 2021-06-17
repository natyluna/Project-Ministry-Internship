<?php



function MostrarPersonas($cone)
{
    
    try {
        $query = $cone->prepare("SELECT * FROM personas limit 10000");
        $query->execute();
        $datos = $query->fetchAll();
        return $datos;
    } catch (PDOException $e) {
        alerta("ERROR AL MOSTRAR LOS DATOS: $e");
    }
}

function Guardar($cone)
{
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

    if (!validaRequerido($nombre)) {
        return alerta("Campo nombre vacio, ingrese el nombre", false);
    };
    
    if (!soloLetras($nombre)) {
        return alerta("El nombre solo permite letras, ingrese un nombre valido", false);
    };
    if (!validaRequerido($apellido)) {
        return alerta("Campo apellido vacio, ingrese el apellido", false);
    };
    if (!soloLetras($apellido)) {
        return alerta("El apellido solo permite letras, ingrese un apellido valido", false);
    };
    if (!validaRequerido($dni)) {
        return alerta("Campo DNI vacio, ingrese el DNI", false);
    };
    if (!validarCant($dni, 7)) {
        return alerta("El DNI permite minimo 7 digitos, ingrese un DNI valido", false);
    };
    if (!validaRequerido($email)) {
        return alerta("Campo email vacio, ingrese un email", false);
    };
    if (!validaEmail($email)) {
        return alerta("El email debe incluir un @, ingrese un email valido", false);
    };
    if (!validaRequerido($nacimiento)) {
        return alerta("Ingrese la Fecha de Nacimiento", false);
    };
    if (!validaRequerido($telefono)) {
        return alerta("Campo telefono vacio, ingrese un telefono", false);
    };
    if (!validarCant($telefono, 10)) {
        return alerta("El  telefono requiere minimo 10 digitos, ingrese un telefono valido", false);
    };
    if (!validaRequerido($nacionalidad)) {
        return alerta("Seleccione una Nacionalidad", false);
    };

    try {
        $sql = "INSERT INTO personas(dni,nombre,apellido,fecha_nac,telefono,correo,nacionalidad,sexo,latitud,longitud) VALUES ('$dni','$nombre','$apellido','$nacimiento','$telefono','$email','$nacionalidad','$sexo','$latitud','$longitud')";
        $cone->exec($sql);
        alerta('DATOS CARGADOS CORRECTAMENTE!!');
    } catch (PDOException $e) {
        alerta("ERROR AL CARGAR LOS DATOS!!: $e", false);
    }
}
