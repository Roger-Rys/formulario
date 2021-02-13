<?php

class Contact{
    private $db;
    private $id;
    private $username;
    private $url;
    private $image;
    
    public function __construct(){
        $this->db = DataBase::connect();
    }
    
    //SET & GET
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getImage() {
        return $this->image;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setImage($image) {
        $this->image = $image;
    }
    //END SET & GET
    
    public function obtenerTodo(){
        $query = "SELECT * FROM contacts";
        $result = $this->db->query($query);
        
        if(isset($result) && ($result->num_rows > 0)){
            return $result;
        }
        else{
            echo "0 resultados";
        }     
    } 
    
    //UPDATE
    public function update(){
        $query = "UPDATE contacts SET username='{$this->getUsername()}', url='{$this->getUrl()}', image='{$this->getImage()}' WHERE id={$this->getId()}";
                
        $result = $this->db->query($query);
        $update = false;
        if($result === true){
            $update = true;
        }
        return $update;
        
    }
}

