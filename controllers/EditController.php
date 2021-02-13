<?php

//Inicio de sesion
if(isset($_POST["user"]) && isset($_POST["password"])){
    include_once "../config/parameters.php";
    $name_user=$_POST["user"];
    $_POST["user"]=null;
    $pass_user=$_POST["password"];
    $_POST["password"]=null;
    
    if(($name_user==USER_ADMIN) && ($pass_user==PASS_ADMIN)){
        //Iniciar Sesion
        if(!isset($_SESSION)){ session_start(); }
        
        $iniciar_sesion = new EditController();
        $iniciar_sesion->inicioSesion($name_user);
    }
    else{
        header("location:".url_content."edit");
    }
}

//Guardar edicion
if(isset($_GET["skill"]) || isset($_GET["project"]) || isset($_GET["contact"])){
    require_once '../config/parameters.php';
    require_once '../models/connectiondb.php';
    require_once '../models/aboutMe.php';
    require_once '../models/project.php';
    require_once '../models/contact.php';
}
if(isset($_GET["skill"])){
    $id = $_GET["skill"];
    $title = $_GET["title$id"];
    $desc = $_GET["desc$id"];
    
    $skill = new EditController();
    $skill->changeSkill($id, $title, $desc);
}
if(isset($_GET["project"])){
    $id = $_GET["project"];
    $title = $_GET["title$id"];
    $desc = $_GET["desc$id"];
    $url = $_GET["url$id"];
    $image = $_GET["image$id"];
    
    $project = new EditController();
    $project->changeProject($id, $title, $desc, $url, $image);
  
}
if(isset($_GET["contact"])){
    $id = $_GET["contact"];
    $username = $_GET["username$id"];
    $url = $_GET["url$id"];
    $image = $_GET["image$id"];
    
    $contact = new EditController();
    $contact->changeContact($id, $username, $url, $image);
}

class EditController{
    public function index(){
        require_once "views/edit/login.php";
    }
    
    public function inicioSesion($name){
        $_SESSION["admin"] = $name;
        header('location:'.url_root);
    }
    
    public function edit(){
        //Habilidades
       $skills = new AboutMe();
       $skills_datos = $skills->obtenerTodo();
       
        //Proyectos
       $projects = new Project();
       $projects_datos = $projects->obtenerTodo();
       
        //Contactos
       $contacts = new Contact();
       $contacts_datos = $contacts->obtenerTodo();
              
       require_once 'views/edit/edit.php';
    }
    
    //Update dates
    public function changeSkill($id, $title, $desc){        
        $update = new AboutMe();
        $update->setId($id);
        $update->setTitle($title);
        $update->setDesc($desc);
        $result = $update->update();
        if($result){
            header('location:'.url_root);
        }else{
            $_SESSION["update"]="Error al actualizar";   
            header('location:'.url_content."edit");
        }
    }
    
    public function changeProject($id, $title, $desc, $url, $image){
        $update = new Project();
        $update->setId($id);
        $update->setTitle($title);
        $update->setDesc($desc);
        $update->setUrl($url);
        $update->setImage($image);
        $result = $update->update();
        if($result){
            header('location:'.url_root);
        }else{
            $_SESSION["update"]="Error al actualizar";   
            header('location:'.url_content."edit");
        }
    }
    
    public function changeContact($id, $username, $url, $image){
        $update = new Contact();
        $update->setId($id);
        $update->setUsername($username);
        $update->setUrl($url);
        $update->setImage($image);
        $result = $update->update();
        if($result){
            header('location:'.url_root);
        }else{
            $_SESSION["update"]="Error al actualizar";   
            header('location:'.url_content."edit");
        }
    }
    
}

