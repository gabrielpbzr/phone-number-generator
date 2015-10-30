<?php
define('BASE_DIR', __DIR__);



 function __autoload($className){
    $filename = BASE_DIR."".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $className).".php";
    
    if(!file_exists($filename)){
        throw new Exception("Class not found. File $filename not found");
    }
    require_once $filename;
    
 }
?>