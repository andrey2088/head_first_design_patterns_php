<?php

namespace Hfdp\Pattern\Decorator;

class Whip extends CondimentDecorator
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
        return $this->beverage->getDescription() . ", Whip";
    }
    
    /**
     * Cost of beverage with condiments
     * @return float
     */
    public function cost()
    {
        return .10 + $this->beverage->cost();
    }
}
