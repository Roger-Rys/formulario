<?php

class ProjectController{
    public function index(){
       
       $projects = new Project();
       $query = $projects->obtenerTodo();
       
       //Vista
       require_once 'views/project/projects.php';
    }
    
    public function add(){
       require_once 'views/project/projects.php';
    }
}

