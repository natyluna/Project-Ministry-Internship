<?php
abstract class Controller {

    private $view; 
   
    protected function render($controller_name = '',$params = array()){
        $this->view = new View($controller_name,$params);
    }
    abstract public function exec();
  
}

?>