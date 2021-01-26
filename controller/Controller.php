<?php

class Controller{
    
    private $name;
    
    public static function display(){
        
        $controller= self::name;
        $view= 'detail' ;
        $pagetitle= "Application $controller";
        
        require (File::build_path(array('view' , 'global' , 'view.php')));
        
    }
}

?>