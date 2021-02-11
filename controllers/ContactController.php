<?php

class ContactController{
    public function index(){
        $contact = new Contact();
        $query = $contact->obtenerTodo();
        
        
        require_once 'views/contact/contactMe.php';
    }
}

