<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\material;
use MVC\core\session;
use MVC\core\helpers;
class materialcontroller extends controller{
    public $material;
   public $user_data;
  public function __construct()
  {
    session::Start();

    $this->user_data=session::Get('user');
    //print_r( $this->user_data);die;
     if(empty($this->user_data)){
       echo 'class not access';die;
     }

     $this->material=new material();
  }

//////////////////////////////////////////operating system
  public function materialos(){
    $title16='material doctor';
    $this->view('material/materialos',['title16'=>$title16]);
  }

  public function  insertquestionos(){
      if(!empty($_POST['question'])){
      $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
     
      $data=$this->material->addquestionos($data);
      if($data){
          helpers::redirect('material/dataos');
      }
    }
  }
  //select data operating system
  public function dataos(){
    $data=$this->material->selectquestionos();
    $title='show questions for operating system exam';
    $this->view('material/dataos',['title'=>$title ,'data'=>$data]);
  }
  //delete operating system questions
public function deleteossubject($id){
  $data=$this->material->deleteos($id);
  if($data){
    helpers::redirect('material/dataos');
  }
}
//update operating system

public function getsubjectoperatingsystem($id){
  $data=$this->material->getsubjectos($id);
  $title=' update operating system subject ';
  $this->view('material/updateos',['data'=>$data ,'title'=>$title]);
}

public function updateos(){
  if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
  }
  $id=['id'=>$_POST['id']];
  $data=$this->material->updatesubjectos($data,$id);
  
 if($data){
   helpers::redirect('material/dataos');
  }
}

  /////////////////////////////////////////////////////////////////////////////////
/// modeling and simulation subject

  public function materialmodeling(){
    $title16='material doctor';
    $this->view('material/materialmodeling',['title16'=>$title16]);
  }

  public function  insertquestionmodeling(){
    if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
   
    $data=$this->material->addquestionmodeling($data);
    if($data){
        helpers::redirect('material/datamodeling');
    }
  }
  }
  // select modeling and simulation
  public function datamodeling(){
    $data=$this->material->selectquestionmodeling();
    $title='show questions for modeling & simulation exam';
    $this->view('material/datamodeling',['title'=>$title ,'data'=>$data]);
  }
  //delete modeling and simulation

public function deletemodelingsubject($id){
  $data=$this->material->deletemodeling($id);
  if($data){
    helpers::redirect('material/datamodeling');
  }
}
//update modeling and  simulation 

public function getsubjectmodeling($id){
  $data=$this->material->getsubjectmodeling($id);
  $title=' update modeling & simulation subject ';
  $this->view('material/updatemodeling',['data'=>$data ,'title'=>$title]);
}

public function updatemodeling(){
  if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
  }
  $id=['id'=>$_POST['id']];
  $data=$this->material->updatesubjectmodeling($data,$id);
  
 if($data){
   helpers::redirect('material/datamodeling');
  }
}


  ////////////////////////////////////////////////////////
  // Software requirements analysis subject

  public function materialrequirements(){
    $title16='material doctor';
    $this->view('material/materialrequirements',['title16'=>$title16]);
  }

  
  public function  insertquestionrequirements(){
    if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
   
    $data=$this->material->addquestionrequirements($data);
    if($data){
        helpers::redirect('material/datarequirements');
    }
  }
  }
// select software requirements
  public function datarequirements(){
    $data=$this->material->selectquestionrequirements();
    $title='show questions for software requirements exam';
    $this->view('material/datarequirements',['title'=>$title ,'data'=>$data]);
  }
  //delete software requirements

public function deleterequirementssubject($id){
  $data=$this->material->deleterequirements($id);
  if($data){
    helpers::redirect('material/datarequirements');
  }
}
//update software requirements

public function getsubjectrequirements($id){
  $data=$this->material->getsubjectrequirements($id);
  $title=' update software requirements subject ';
  $this->view('material/updaterequirements',['data'=>$data ,'title'=>$title]);
}

public function updaterequirements(){
  if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
  }
  $id=['id'=>$_POST['id']];
  $data=$this->material->updatesubjectrequirements($data,$id);
  
 if($data){
   helpers::redirect('material/datarequirements');
  }
}


  //////////////////////////////////////////////////////////////////////////////
  public function materialsc(){
    $title16='material doctor';
    $this->view('material/materialsc',['title16'=>$title16]);
  }

  public function  insertquestionsc(){
    if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
   
    $data=$this->material->addquestionsc($data);
    if($data){
        helpers::redirect('material/datasc');
    }
  }
  }

  // select system construction

  public function datasc(){
    $data=$this->material->selectquestionsc();
    $title='show questions for system construction exam';
    $this->view('material/datasc',['title'=>$title ,'data'=>$data]);
  }
  //delete system construction

public function deletescsubject($id){
  $data=$this->material->deletesc($id);
  if($data){
    helpers::redirect('material/datasc');
  }
}
//update system construction

public function getsubjectsc($id){
  $data=$this->material->getsubjectsc($id);
  $title=' update system construction subject ';
  $this->view('material/updatesc',['data'=>$data ,'title'=>$title]);
}

public function updatesc(){
  if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
  }
  $id=['id'=>$_POST['id']];
  $data=$this->material->updatesubjectsc($data,$id);
  
 if($data){
   helpers::redirect('material/datasc');
  }
}

  /////////////////////////////////////////////////////////////////////////////////////////////

  public function materialcn(){
    $title16='material doctor';
    $this->view('material/materialcn',['title16'=>$title16]);
  }

  public function  insertquestioncn(){
    if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
   
    $data=$this->material->addquestioncn($data);
    if($data){
        helpers::redirect('material/datacn');
    }
  }
  }
  // select computer networks

  public function datacn(){
    $data=$this->material->selectquestioncn();
    $title='show questions for computer networks exam';
    $this->view('material/datacn',['title'=>$title ,'data'=>$data]);
  }
  //delete computer networks

public function deletecnsubject($id){
  $data=$this->material->deletecn($id);
  if($data){
    helpers::redirect('material/datacn');
  }
}
//update computer networks

public function getsubjectcn($id){
  $data=$this->material->getsubjectcn($id);
  $title=' update computer network  subject';
  $this->view('material/updatecn',['data'=>$data ,'title'=>$title]);
}

public function updatecn(){
  if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
  }
  $id=['id'=>$_POST['id']];
  $data=$this->material->updatesubjectcn($data,$id);
  
 if($data){
   helpers::redirect('material/datacn');
  }
}

  ////////////////////////////////////////////////////////////////////////////////////////////
  public function materialopensource(){
    $title16='material doctor';
    $this->view('material/materialopensource',['title16'=>$title16]);
  }

  public function  insertquestionopensource(){
    if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
   
    $data=$this->material->addquestionopensource($data);
    if($data){
        helpers::redirect('material/dataopensource');
    }
  }
  }
  // select open source

  public function dataopensource(){
    $data=$this->material->selectquestionopensource();
    $title='show questions for opensource exam';
    $this->view('material/dataopensource',['title'=>$title ,'data'=>$data]);
  }
  //delete  open source

public function deleteopensourcesubject($id){
  $data=$this->material->deleteopensource($id);
  if($data){
    helpers::redirect('material/dataopensource');
  }
}
//update open source

public function getsubjectopensource($id){
  $data=$this->material->getsubjectopensource($id);
  $title=' update open source subject ';
  $this->view('material/updateopensource',['data'=>$data ,'title'=>$title]);
}

public function updateopensource(){
  if(!empty($_POST['question'])){
    $data=['question'=>$_POST['question'],'optionA'=>$_POST['optionA'],'optionB'=>$_POST['optionB'],'optionC'=>$_POST['optionC'],'optionD'=>$_POST['optionD'],'correct_option'=>$_POST['correct_option']];
  }
  $id=['id'=>$_POST['id']];
  $data=$this->material->updatesubjectopensource($data,$id);
  
 if($data){
   helpers::redirect('material/dataopensource');
  }
}

/////////////////////////////////////////////////////////////////////


  public function material(){
    $title6='Choose Test';
    $data=$this->material->selectmaterial();

    $this->view('material/material',['title6'=>$title6 ,'data'=>$data]);
  }

  public function opensorce(){
    $title10=' test open source';
    $data=$this->material->selectquestionopensource();
    $this->view('material/subject/opensorce',['title10'=>$title10 ,'data'=>$data]);
  }

  public function os(){
    $title11=' test operationg system';
    $data=$this->material->selectquestionos();
    $this->view('material/subject/os',['title11'=>$title11,'data'=> $data]);
  }
  public function sc(){
    $title12=' test system construction';
    $data=$this->material->selectquestionsc();
    $this->view('material/subject/sc',['title12'=>$title12 ,'data'=>$data]);
  }

  public function modeling(){
    $title13=' test modeling and simulation';
    $data=$this->material->selectquestionmodeling();
    $this->view('material/subject/modeling',['title13'=>$title13 ,'data'=>$data]);
  }

  public function softwarerequirements(){
    $title14=' test software requirements';
    $data=$this->material->selectquestionrequirements();
    $this->view('material/subject/softwarerequirements',['title14'=>$title14 ,'data'=>$data]);
  }
public function cn(){
  $title15='test computer network';
  $data=$this->material->selectquestioncn();
  $this->view('material/subject/cn',['title15'=>$title15 ,'data'=>$data]);
}


//////////////////////////////////////////
public function showresultsos(){
  $title='show results for students in operating system';
  $data=$this->material->selectresultsos();
  $this->view('material/showresultsos',['title'=>$title ,'data'=>$data]);
}

public function showresultopen(){
  $title='show results for students in open source';
  $data=$this->material->selectresultsopen();
  $this->view('material/showresultopen',['title'=>$title ,'data'=>$data]);
}

public function showresultsc(){
  $title='show results for students in system construction';
  $data=$this->material->selectresultssc();
  $this->view('material/showresultsc',['title'=>$title ,'data'=>$data]);
}
/////////////////////////////////////////
public function showlevel(){
  $title='Determine the level of the exam';
  $this->view('material/showlevel',['title'=>$title]);
}
public function showaveragelevel(){
  $title='Determine the level of the exam';
  $this->view('material/showavergelevel',['title'=>$title]);
}

}

?>