<?php

namespace Hfdp\Controller;

class MainController
{
    /**
     * @return Response
     */
    public static function main()
    {
        //$controller = new StrategyController();
        $controller = new ObserverController();
        $controller->main();
    }

}
