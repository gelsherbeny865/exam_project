<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;
use MVC\models\material;
use MVC\core\session;
use MVC\core\helpers;
class admincontroller extends controller{
public $user_data;
public $user;
public $material;
  public function __construct()
  {
    session::Start();
    $this->user_data=session::Get('user');
    $this->user=new user();
  $this->material=new material();
  }

  public function home(){
    $title9='Back Home';
    $this->view('admin/home',['title9'=>$title9]);
}

  public function adminsignup(){
      $title7='sign up for admin';
      $this->view('admin/adminsignup',['title7'=>$title7]);
  }
 public function addadmin(){
    
     if(isset($_POST['name'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
         $error=[];
         if(empty($name) || empty($email) || empty($password)){
           $error[]="Enter all correct data";
           helpers::redirect('admin/adminsignup');
         }
         if(empty($error)) {
    
     $admindata=['name'=>$_POST['name'], 'email'=>$_POST['email'] ,'password'=>$_POST['password']];
     $admindata= $this->user->enteradmindata($admindata);
      if($admindata){
          helpers::redirect('admin/adminlogin');
      }
    }
 }
}
public function adminlogin(){
    $title8="Login for admin";
    $this->view('admin/adminlogin',['title8'=>$title8]);
}
public function selectadmin(){
   
  if(!empty($_POST['email'])){   
   
    $selectadminn=$this->user->selectadmindata($_POST['email'],$_POST['password']);
    if(!empty($selectadminn)){
      helpers::redirect('admin/home');
      session::Set('user',$selectadminn);     
    }
    else{
      helpers::redirect('admin/adminlogin');
    }  
}
}
public function showprofdata(){
  $title9='show  data professors';
  $data= $this->user->selectprofdata();
  $this->view('admin/showprofdata',['title9'=>$title9  , 'data'=>$data]);
}
//// update  data professors
public function getprofessor($id){
 $data=$this->user->getprofdata($id);
 $title='update professor data';
 $this->view('admin/updatedataprof',['data'=>$data ,'title'=>$title]);

}

public function updateprof(){     
  if(!empty($_POST['name'])){  

      $data = [ 'name'=> $_POST['name'] , 'email'=>$_POST['email'], 'password'=>$_POST['password'],  'admin_id' => $this->user_data->id  ];
    }  
  $id = ['id'=>$_POST['id']];    
  $data = $this->user->updateprofs($data,$id);
  if($data){
      helpers::redirect('admin/showprofdata');
  }
}

//delete professors
public function deleteprofs($id){
  $data=$this->user->deleteprof($id);
  if($data){
    helpers::redirect('admin/showprofdata');
  }
}

///// students 
public function showstudentdata(){
  $title20='show students data';
  $data=$this->user->selectalldatastudents();
  $this->view('admin/showstudentsdata',['title20'=>$title20 ,'data'=>$data]);
}
//delete students
public function deletestudents($id){
  $data=$this->user->deletestudent($id);
  if($data){
    helpers::redirect('admin/showstudentdata');
  }
}
//update students

public function getstudents($id){
  $data=$this->user->getstudentdata($id);
  $title=' update students ';
  $this->view('admin/updatestudents',['data'=>$data ,'title'=>$title]);
}

public function updatestudent(){
  if(!empty($_POST['name'])){
    $data = [ 'name'=> $_POST['name'] , 'email'=>$_POST['email'], 'password'=>$_POST['password'],  'admin_id' => $this->user_data->id  ]; 
  }
  $id_student=['id'=>$_POST['id_student']];
  $data=$this->user->updatestudents($data,$id_student);
  if($data){
    helpers::redirect('admin/showstudentdata');
  }
}
//////////////////////////////add material

public function addmaterial(){
  $title="Add material";
  $this->view('admin/addmaterial',['title'=>$title]);
}
/////////////
public function insertmaterial(){
  if(!empty($_POST['name'])){
      $material=['name'=>$_POST['name'] ,'professor_name'=>$_POST['name_professor'] ,'location'=>$_POST['location']];
   
    $material=$this->material->insertmaterial($material);
    if($material){
     helpers::redirect('admin/selectmaterial');
    }
  }
}
////////////select material
public function selectmaterial(){
  $data=$this->material->selectmaterial();
  $title='show material';
  $this->view('admin/selectmaterial',['data'=>$data ,'title'=>$title]);
}
//delete material
public function deletematerials($id){
  $data=$this->material->deletematerial($id);
  if($data){
    helpers::redirect('admin/selectmaterial');
  }
}
//update materials

public function getmaterial($id){
  $data=$this->material->getmaterialdata($id);
  $title=' update materials ';
  $this->view('admin/updatematerials',['data'=>$data ,'title'=>$title]);
}

public function updatematerials(){
  if(!empty($_POST['name'])){
    $data = [ 'name'=> $_POST['name'] , 'professor_name'=>$_POST['name_professor'] ,'location'=>$_POST['location'] ]; 
  }
  $id_material=['id'=>$_POST['id_material']];
  $data=$this->material->updatematerial($data,$id_material);
  if($data){
    helpers::redirect('admin/selectmaterial');
  }
}

// destroy session//
public function logout(){
  session::Stop();
}
}
?>