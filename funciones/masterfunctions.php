<?php
//Extrae la ruta de la carpeta Principal
function getMainfolder() {
    $rutaActual = getcwd();
    $rutaslocal = explode("/",$_SERVER['REQUEST_URI']);
    return $rutaslocal[1];

}

//Simula un console.log de JavaScript
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}


function alerta($mensaje,$estado=true){
      if($estado){
        echo("<div class='bg-success p-4 mt-4 rounded text-center text-uppercase'> <p class='text-white'>*$mensaje</p> </div>");
      }else{
        echo "<div class='bg-danger p-4 mt-4 rounded text-center text-uppercase'> <p class='text-white'>*$mensaje</p> </div>";
      }
}



?>