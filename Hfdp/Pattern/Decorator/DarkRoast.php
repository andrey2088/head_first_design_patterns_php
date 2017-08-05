<?php

namespace Hfdp\Pattern\Decorator;

class DarkRoast extends Beverage
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->description = "Dark Roast Coffee";
    }
    
    /**
     * Returns cost of beverage
     * @return float
     */
    public function cost()
    {
        return .99;
    }
}
