<?php

namespace Hfdp\Controller;

class MainController
{
    /**
     * Main
     */
    public static function main()
    {
        //$controller = new StrategyController();
        //$controller = new ObserverController();
        $controller = new DecoratorController();
        //$controller = new FactoryController();
        //$controller = new SingletonController();
        $controller->main();
    }

}
