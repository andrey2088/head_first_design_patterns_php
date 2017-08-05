<?php

namespace Hfdp\Pattern\Decorator;

class Soy extends CondimentDecorator
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
        return $this->beverage->getDescription() . ", Soy";
    }
    
    /**
     * Cost of beverage with condiments
     * @return float
     */
    public function cost()
    {
        return .15 + $this->beverage->cost();
    }
}
