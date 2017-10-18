<?php

namespace Hfdp\Pattern\Combining;

abstract class AbstractDuckFactory
{
    /**
     * Create mallard duck
     * @return QuackableInterface
     */
    abstract public function createMallardDuck();

    /**
     * Create redhead duck
     * @return QuackableInterface
     */
    abstract public function createRedheadDuck();

    /**
     * Create duck call
     * @return QuackableInterface
     */
    abstract public function createDuckCall();

    /**
     * Create rubber duck
     * @return QuackableInterface
     */
    abstract public function createRubberDuck();
}
