<?php

class Autoloader{

    public static function register(){
        spl_autoload_register(function ($class){
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            $fileArray = explode(DIRECTORY_SEPARATOR, $file);
            if($fileArray[0] == "App"){
                $fileArray[0] = "src";
            }
            //$file = implode(','$fileArray);
            $file = implode(DIRECTORY_SEPARATOR, $fileArray);
            // var_dump($file);
            if(file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}

Autoloader::register();