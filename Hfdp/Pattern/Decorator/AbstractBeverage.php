<?php

namespace Hfdp\Pattern\Decorator;

abstract class AbstractBeverage
{
    /**
     * @var string
     */
    protected $description = "Unknown beverage";

    /**
     * Returns beverage description
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Returns cost of beverage or condiment or both
     * @return float
     */
    abstract public function cost(): float;
}
