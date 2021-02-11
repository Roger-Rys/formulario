<?php
class AboutMeController{
    public function index(){
        $aboutMe = new AboutMe();
        $result = $aboutMe->obtenerTodo();
        
        require_once 'views/aboutMe/aboutMe.php';
    }
}

?>

