<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\user;
use MVC\models\material;
use MVC\core\session;
use MVC\core\helpers;
class professorcontroller extends controller{
public $material;
  public function __construct()
  {
    session::Start();
    $this->material=new material();
  }


}