<?php
// Generamos una constante que contiene la ruta a la raíz pública del proyecto
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
require_once('./config/Config.php');

// Llamamos al controlador Principal.
require_once(ROOT.'system/Core/Controller.php');

// Separamos los parámetros y los colocamos en el array  $params
if(isset($_GET['p'])){
   $params = explode('/', $_GET['p']);
}

// Si existe un parametro
if(isset($params[0])){
    // Guardamos el primer parámetro en $controller poniendo su primera letra en mayúsculas (ucfirst)
    $controller = ucfirst($params[0]);

    // Guardamos el segundo parámetro en $action si existe, de lo contrario index
    $action = isset($params[1]) ? $params[1] : 'index';

    // Llamamos al controlador
    require_once(ROOT.'controllers/'.$controller.'.php');

    // Instanciamos al controlador
    $controller = new $controller();

    if(method_exists($controller, $action)){
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller,$action], $params);
        
        // $controller->$action();    
    }else{
         // Enviamos el código de respuesta 404
        http_response_code(404);
        echo "La Pagina no Existe!!";
    }
}else{
   // Llamamos al controlador Principal
    require_once(ROOT.'controllers/Home.php');

    // Instanciamos el Controlador
    $controller = new Home();

    //Ejecutamos el Metodo Index del Controlador
    $controller->index();
}

?>