<?php

namespace Hfdp;

class Utils
{
    public static function output($message)
    {
        echo $message;
    }
    
    public static function outputWithBr($message)
    {
        echo $message . "<br />";
    }
}