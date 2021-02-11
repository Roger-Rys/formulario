<?php
require_once 'models/connectiondb.php';

class Project{
    
    private $db;
    
    public function __construct(){
        $this->db = DataBase::connect();
    }
    
    public function obtenerTodo(){
        $query = "SELECT * FROM projects";
        $result = $this->db->query($query);
        
        if(isset($result) && ($result->num_rows > 0)){
            return $result;
        }
        else{
            echo "0 resultados";
        } 
    
    }   
}
