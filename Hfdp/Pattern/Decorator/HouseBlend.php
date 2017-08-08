<?php

namespace Hfdp\Pattern\Decorator;

class HouseBlend extends AbstractBeverage
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }
    
    /**
     * Returns cost of beverage
     * @return float
     */
    public function cost()
    {
        return .89;
    }
}
