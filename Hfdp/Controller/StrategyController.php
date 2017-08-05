<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Strategy as Strategy;

class StrategyController
{
    /**
     * @return Response
     */
    public function main()
    {
        $mallard = new Strategy\MallardDuck();
        $mallard->performQuack();
        $mallard->performFly();
    }

}
