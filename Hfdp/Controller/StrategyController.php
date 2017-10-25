<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Strategy as Strategy;

class StrategyController
{
    /**
     * Main
     */
    public static function main(): void
    {
        $mallard = new Strategy\MallardDuck();
        $rubberDuckie = new Strategy\RubberDuck();
        $decoy = new Strategy\DecoyDuck();
        $model = new Strategy\ModelDuck();

        $mallard->performQuack();
        $mallard->performFly();

        $rubberDuckie->performQuack();
        $rubberDuckie->performFly();

        $decoy->performQuack();
        $decoy->performFly();

        $model->performQuack();
        $model->performFly();
        $model->setFlyBehavior(new Strategy\FlyRocketPowered());
        $model->performFly();
    }

}
