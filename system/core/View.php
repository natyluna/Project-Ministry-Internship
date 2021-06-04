<?php 
      class View{
        protected $template;
        protected $controller_name;
        protected $params;

        public function __construct($controller_name,$params=array()){
                $this->controller_name = $controller_name;
                $this-> params = $params;
                $this->render();
        }
        protected function render(){
            try {
                if(class_exists($this->controller_name)){
                    $file_name = str_replace('Controller','',$this->controller_name);
                    $this -> template = $this->getContentTemplate($file_name);
                    echo $this->template;
                }
            } catch (\Throwable $th) {
                echo "ERROR NO EXISTE $th";
            }
        }
        protected function getContentTemplate($file_name){
            $file_path = ROOT .'/'.PATH_VIEWS ."$file_name/$file_name".'.php';
            $file_path = "C:/xampp/htdocs/Project-Ministry-Internship/app/views/Home/login.php";
            try {
                if(is_file($file_path)){
                    extract($this->params);// Extrae todos los valores del arreglo params y los coloca como una variable
                    ob_start();//Todo lo que pase en ob_start y ob_end se conserva en el buffer
                    require($file_path);
                    $template = ob_get_contents();
                    ob_end_clean();
                   
                    return $template;
                }
            } catch (\Throwable $th) {
                echo "ERROR NO EXISTE $th";
            }
        }
    }

?>