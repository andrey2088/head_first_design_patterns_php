<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Singleton as Singleton;

class SingletonController
{
    /**
     * Main
     */
    public function main()
    {
        $singleton = Singleton\Singleton::getInstance();
    }

}
