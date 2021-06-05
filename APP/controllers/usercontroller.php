<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\session;
use MVC\models\user;
use MVC\CORE\helpers;


class usercontroller extends controller{
   public $user_data;
   public $user;
    public  function  __construct(){
        session::Start();
       $this->user_data=session::Get('user');
      // print_r( $this->user_data);
       if(empty($this->user_data)){
         echo 'class not access';die;
       }
       $this->user=new user();
    }
      public function signup(){
        $title5='Sign Up';
        $this->view('user/signup',['title5'=>$title5]);
      }
    
    public function insertdata(){
      if(isset($_POST['name'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
         
         if(empty($name) || empty($email) || empty($password)){
          
           helpers::redirect('user/signup');
         }
         
       if($_POST['name']=='amr' ||$_POST['name']=='Amr'||$_POST['name']=='huisam'||$_POST['name']=='amna'||$_POST['name']=='reda'||$_POST['name']=='mai'){
        $data=['name'=>$_POST['name'] ,'email'=>$_POST['email'] ,'password'=>$_POST['password'] ,'admin_id'=>$this->user_data->id];
        $data= $this->user->enterprofessordata($data);     
        if($data){
          helpers::redirect('user/login');
        }
      } 
      else{
        $data=['name'=>$_POST['name'] ,'email'=>$_POST['email'] ,'password'=>$_POST['password'] ,'admin_id'=>$this->user_data->id];
        $data= $this->user->enterstudendata($data);     
        if($data){
          helpers::redirect('user/login');
        }

      }
      }
    }
    

    public function login(){
      $title4=' Login In';
      $this->view('user/login',['title4'=>$title4]);
    }

      public function SelectProfessorAllData(){
       if(!empty($_POST['email'])){
         if($_POST['email']=='amr@gmail.com'||$_POST['email']=='Amr11@gmail.com'|| $_POST['email']=='reda@gmail.com' || $_POST['email']=='amna@gmail.com' || $_POST['email']=='mai@gmail.com' || $_POST['email']=='huisam@gmail.com'){
        $data=$this->user->selectprofalldata($_POST['email'],$_POST['password']);
        if(!empty($data)){
        session::Set('user',$data);
        if($_POST['email']=='amr@gmail.com'){
        helpers::redirect('material/materialrequirements' );
       }
      elseif($_POST['email']=='Amr11@gmail.com'){
        helpers::redirect('material/materialsc' );
       }

     
       elseif($_POST['email']=='reda@gmail.com'){
        helpers::redirect('material/materialopensource' );
       }
       elseif($_POST['email']=='amna@gmail.com'){
        helpers::redirect('material/materialos' );
       }
       elseif($_POST['email']=='mai@gmail.com'){
        helpers::redirect('material/materialcn' );
       }
       elseif($_POST['email']=='huisam@gmail.com'){
        helpers::redirect('material/materialmodeling' );
       }
       else{
        helpers::redirect('user/login');
       }
      }
      }
    
      else{
        $data=$this->user->selectstudentdata($_POST['email'],$_POST['password']);
        if(!empty($data)){
        session::Set('user',$data);
        //session::Set('professor',$data);
        helpers::redirect('material/material');
       }
       else{
        helpers::redirect('user/login');
       }

      }
    }
    }




    
}


?>