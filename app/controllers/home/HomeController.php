<?php
class HomeController extends Controller {

    public function __construct(){
     $params=array();
  } 
    
    public function exec(){
        $this->show();
    }

    public function show(){
      $this->render(__CLASS__); 
    }
}

?>