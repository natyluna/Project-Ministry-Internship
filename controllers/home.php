<?php

class Home extends Controller{

    public function index(){
        $this->render('index');
    }

    public function login(){
        $this->render('Login');
    }

}

?>