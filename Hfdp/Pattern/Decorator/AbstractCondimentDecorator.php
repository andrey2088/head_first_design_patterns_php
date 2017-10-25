<?php

namespace Hfdp\Pattern\Decorator;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    /**
     * Returns beverage description
     * @return string
     */
    public function getDescription(): string {}
}
