<?php



class AboutMe{
    private $db;
    private $id;
    private $title;
    private $desc;
    
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
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
    }

        
    public function obtenerTodo(){
        $query = "SELECT * FROM skills";
        
        $result = $this->db->query($query);
        if(isset($result) && ($result->num_rows > 0)){
            return $result;
        }
        else{
            echo "0 resultados";
        }
    }
    
    public function update(){
        $query = "UPDATE skills SET title='{$this->getTitle()}', description='{$this->getDesc()}' WHERE id={$this->getId()};";
        
        $result = $this->db->query($query);
        $update = false;
        if($result === true){
            $update = true;
        }
        return $update;
    }
}
