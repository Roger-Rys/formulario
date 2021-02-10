<?php


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

class EditController{
    public function index(){
        require_once "views/edit/edit.php";
    }
    
    public function inicioSesion($name){
        $_SESSION["admin"]= $name;
        header('location:'.url_root);
    }
}

