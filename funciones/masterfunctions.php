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
        echo "<div class=' mt-4 alert alert-success d-flex align-items-center' role='success'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'></use></svg>
        *$mensaje.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }else{
 
        echo "<div class=' mt-4 alert alert-danger alert-dismissible fade show' role='alert'>
        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='Warning:'>
        <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
      </svg>
        <strong>ERROR!:</strong> $mensaje.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }
}
