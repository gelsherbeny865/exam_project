<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\session;
use MVC\core\helpers;
class homecontroller extends controller{
  public function __construct()
  {
    session::Start();

  }
  public function index(){
    $title='Home';
    $this->view("home/index",['title'=>$title]);
  }
  public function learnmore(){
    $title1='Learn More';
    $this->view('home/learnmore',['title1'=>$title1]);
  }
  public function about(){
    $title2='About Us';
    $this->view('home/about',['title2'=>$title2]);
  }

  public function contact(){
    $title3='Contact Us';
    $this->view('home/contact',['title3'=>$title3]);
  }
  }






?>