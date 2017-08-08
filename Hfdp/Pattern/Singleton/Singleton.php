<?php

namespace Hfdp\Pattern\Singleton;

class Singleton
{
    /**
     * Unique instance of this class
     * @var Singleton
     */
    private static $uniqueInstance;
    
    /**
     * Private constructor
     */
    private function __construct() {}
    
    /**
     * Get unique instance of this class
     * @return Singleton
     */
    public static function getInstance()
    {
        if (is_null(self::$uniqueInstance)) {
            self::$uniqueInstance = new self();
        }
        
        return self::$uniqueInstance;
    }
    
    /**
     * Prevent cloning of an instance of the class via the clone operator.
     */
    private function __clone() {}
    
    /**
     * Prevent unserializing of an instance of the class via the global function unserialize().
     */
    private function __wakeup() {}
}
