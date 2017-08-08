<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Decorator as Decorator;

class DecoratorController
{
    /**
     * Main
     */
    public function main()
    {
        $beverage = new Decorator\Espresso();
        \Hfdp\Utils::outputWithBr($beverage->getDescription() . " $" . $beverage->cost());
        
        $beverage2 = new Decorator\DarkRoast();
        $beverage2 = new Decorator\Mocha($beverage2);
        $beverage2 = new Decorator\Mocha($beverage2);
        $beverage2 = new Decorator\Whip($beverage2);
        \Hfdp\Utils::outputWithBr($beverage2->getDescription() . " $" . $beverage2->cost());
        
        $beverage3 = new Decorator\HouseBlend();
        $beverage3 = new Decorator\Soy($beverage3);
        $beverage3 = new Decorator\Mocha($beverage3);
        $beverage3 = new Decorator\Whip($beverage3);
        \Hfdp\Utils::outputWithBr($beverage3->getDescription() . " $" . $beverage3->cost());
    }

}
