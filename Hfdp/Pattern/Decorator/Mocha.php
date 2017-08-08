<?php

namespace Hfdp\Pattern\Decorator;

class Mocha extends AbstractCondimentDecorator
{   
    /**
     * @var AbstractBeverage
     */
    private $beverage;
    
    /**
     * Constructor
     * @param AbstractBeverage $beverage
     */
    public function __construct(AbstractBeverage $beverage)
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
