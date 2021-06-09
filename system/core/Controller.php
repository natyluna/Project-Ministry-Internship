<?php
abstract class Controller{

    public function render(string $fichier, array $data = []){
        extract($data);

       // Iniciamos el búfer de salida
        ob_start();

        // Generamos la vista
        require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$fichier.'.php');

       // Almacenamos el contenido en $ content
        $content = ob_get_clean();

        // Llamamos a la "View"
        require_once(ROOT.'views/layout/default.php');
    }

   
}

?>