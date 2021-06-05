<?php

namespace MVC\CORE;

class helpers{
    public static function redirect($path){
       header("LOCATION:".DOMAIN_NAME."/".$path);
    }
}

?>