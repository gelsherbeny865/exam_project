<?php
namespace MVC\core;
class app{

  private $controller='home';
 private $method='index';
 private $parameter=[];   
 public function __construct()
{
   $this->url();
   $this->render();
}   

private function url(){
    if(!empty($_SERVER['QUERY_STRING'])){
         $url= explode("/", $_SERVER['QUERY_STRING']);
        //controller
        
        $this->controller =isset($url[0])? $url[0]."controller" : "homecontroller";
     // echo $q; 
      //echo '<pre>';
      // methods
        $this->method =isset($url[1])? $url[1] : "index";
       //echo $q1;
  
       // parameters
       unset($url[0],$url[1]);
       $this->parameter=array_values($url);
    // print_r   ($q2);
  // echo $_SERVER['QUERY_STRING'];
}
else{
  $this->controller='homecontroller';
  $this->method='index';
}
}
private function render(){


   $controller="MVC\controllers\\".$this->controller;

   //echo $control;
   if(class_exists($controller)){
     $controller= new $controller();
     if(method_exists($controller,$this->method)){
      
      call_user_func_array([$controller,$this->method], $this->parameter);
     }else{
       echo 'not found method';
     }
   }
   else{
     echo 'not exist';
   }
}
}
?>











