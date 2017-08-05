<?php

namespace Hfdp\Pattern\Decorator;

class Decaf extends Beverage
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->description = "Decaf Coffee";
    }
    
    /**
     * Returns cost of beverage
     * @return float
     */
    public function cost()
    {
        return 1.05;
    }
}
