<?php

namespace Hfdp\Pattern\Decorator;

class Espresso extends AbstractBeverage
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->description = "Espresso";
    }
    
    /**
     * Returns cost of beverage
     * @return float
     */
    public function cost()
    {
        return 1.99;
    }
}
