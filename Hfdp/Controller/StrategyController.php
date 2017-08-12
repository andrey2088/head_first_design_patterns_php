<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Strategy as Strategy;

class StrategyController
{
    /**
     * Main
     */
    public static function main()
    {
        $mallard = new Strategy\MallardDuck();
        $mallard->performQuack();
        $mallard->performFly();
    }

}
