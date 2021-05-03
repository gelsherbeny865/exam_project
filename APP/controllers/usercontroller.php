<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\session;
use MVC\models\user;
use GUMP;

class usercontroller extends controller{
    public  function  __construct(){
        session::Start();
        $user=session::Get('user');
        if(empty($user)){
            echo 'class not access';die;
        }
    }
   public function index(){
       echo 'user';
   }

   public function add(){
    echo 'add';
}

}

?>