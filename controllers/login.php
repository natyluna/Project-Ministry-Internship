<?php

if(isset($_GET['reg'])){
    echo 'REGISTRATE PAPU';
}

class Login extends Controller{

    public function index(){
        
        $this->render('index');

        
    }

    
    public function register(){
        $this->render('register');
    }

}



?>