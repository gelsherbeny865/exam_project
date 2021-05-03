<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\session;

class homecontroller extends controller{
  public function __construct()
  {
    session::Start();
  }
 public function index()
 {
  //$data= $this->db()->rows("select * FROM employee");
  $user= new user();
  $data=$user->GETALLUsers();
  $h1="jihad";
   $title="home index";
   $this->view("home\index",['title'=>$title ,'h1'=>$h1 ,'data'=>$data]);
 }   
 public function login(){
   $title1="home login";
   $this->view("home\login",['title1'=>$title1]);
 }
 public function postdata(){
  $is_valid = GUMP::is_valid($_POST,[
    'email'=>"required"
  ]);
  //print_r($_POST);die;
   if ($is_valid == 1){
    $user= new user();
    $data=$user->GETUser($_POST['email'],$_POST['password']);
    session::Set('user',$data);
    header("LOCATION:user/index");
   }
   else {
     echo 'enter all data';
   }
 }
}

?>