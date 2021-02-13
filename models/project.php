<?php

class Project{
    
    private $db;
    private $id; 
    private $title;
    private $desc;
    private $url;
    private $image;
    
    public function __construct(){
        $this->db = DataBase::connect();
    }
    
    //SET & GET
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDesc() {
        return $this->desc;
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

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setImage($image) {
        $this->image = $image;
    }
    //END SET & GET
    
    
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
    
    //UPDATE
    public function update(){
        $query = "UPDATE projects SET Pname='{$this->getTitle()}', description='{$this->getDesc()}', image='{$this->getImage()}', url='{$this->getUrl()}' WHERE id={$this->getId()}";
        $result = $this->db->query($query);
        $update = false;
        if($result === true){
            $update = true;
        }
        return $update;
        
    }
}
