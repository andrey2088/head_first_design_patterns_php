<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Singleton as Singleton;

class SingletonController
{
    /**
     * Main
     */
    public static function main(): void
    {
        $singleton = Singleton\Singleton::getInstance();
    }

}
