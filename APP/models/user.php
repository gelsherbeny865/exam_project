<?php
namespace MVC\models;
use MVC\core\model;
class user extends model{

    public function GETALLUsers(){
       $data= model::db()->rows("SELECT * FROM  `employee`");
       return $data;
    }

    public function GETUser($password,$email){
        $data= model::db()->row("SELECT * FROM  `users` WHERE `email`=?  && `password`=?" ,[$password,$email]);
           return $data;
    }
}








?>