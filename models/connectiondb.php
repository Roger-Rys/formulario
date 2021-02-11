<?php

class DataBase{
    
    public static function connect(){
        $host = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "portafolio_php";
        
        $conn = new mysqli($host, $username, $password, $dbname);

        if($conn->connect_error){
            die("Conexion fallida: ".$conn->connect_error);
        }
    
        return $conn;
    }
    
}

