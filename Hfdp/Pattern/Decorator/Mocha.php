<?php

namespace Hfdp\Pattern\Decorator;

class Mocha extends CondimentDecorator
{   
    /**
     * @var Beverage
     */
    private $beverage;
    
    /**
     * Constructor
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
    
    /**
     * Description of beverage with condiments
     * @return string
     */
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }
    
    /**
     * Cost of beverage with condiments
     * @return float
     */
    public function cost()
    {
        return .20 + $this->beverage->cost();
    }
}
