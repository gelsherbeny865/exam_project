<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__) );
define("APP",ROOT.DS.'APP');
define("CONFIG",APP.DS.'config' );
define("CONTROLLERS",APP.DS.'controllers');
define("MODELS",APP.DS.'models');
define("VIEW",APP.DS.'view');
define("CORE",APP.DS.'core');

//echo  ROOT;  
//require_once(CORE.'/app.php');
require_once ("../vendor/autoload.php");
$obj= new  MVC\core\app();
?>