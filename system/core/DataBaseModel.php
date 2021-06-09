<?php
abstract class DataBaseModel{
   //Atributo que contendra la instancia de la conexion
    protected $_connexion;

    // Atributos que se utiliza para personalizar las consultas
    public $table;
    public $id;

   
    //Funcion de inicializacion de base de Datos
    public function getConnection(){
        // Eliminamos la conexión anterior
        $this->_connexion = null;

       // Intentamos conectarnos a la base de datos
        try{
            $this->_connexion = new PDO("mysql:host=" . SERVIDOR_DB . ";dbname=" .NOMBRE_DB, USUARIO_DB, PASSWORD_DB);
            $this->_connexion->exec("set names utf8");
        }catch(PDOException $exception){
            echo "ERROR DE CONEXION CON LA BASE DE DATOS!!! : " . $exception->getMessage();
        }
    }

    // permite obtener un registro de la tabla elegida según un id
    public function getOne($id){
        $sql = "SELECT * FROM ".$this->table." WHERE id=".$this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();    
    }

    // permite obtener todos los registro de la tabla elegida
    public function getAll(){
        $sql = "SELECT * FROM ".$this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();    
    }
}

?>