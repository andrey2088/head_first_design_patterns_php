<?php

namespace Hfdp\Pattern\Combining;

abstract class AbstractDuckFactory
{
    /**
     * Create mallard duck
     * @return QuackableInterface
     */
    abstract public function createMallardDuck(): QuackableInterface;

    /**
     * Create redhead duck
     * @return QuackableInterface
     */
    abstract public function createRedheadDuck(): QuackableInterface;

    /**
     * Create duck call
     * @return QuackableInterface
     */
    abstract public function createDuckCall(): QuackableInterface;

    /**
     * Create rubber duck
     * @return QuackableInterface
     */
    abstract public function createRubberDuck(): QuackableInterface;
}
