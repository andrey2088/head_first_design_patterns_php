<?php

class Autoloader
{
    static public function loader($className)
    {
        $filename = str_replace("\\", "/", $className) . ".php";
        
        if (file_exists($filename)) {
            require_once($filename);
            return true;
        }

        return false;
    }
}

