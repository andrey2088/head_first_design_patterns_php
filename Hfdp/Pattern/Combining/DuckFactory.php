<?php

namespace Hfdp\Pattern\Combining;

class DuckFactory extends AbstractDuckFactory
{
    /**
     * Create mallard duck
     * @return QuackableInterface
     */
    public function createMallardDuck(): QuackableInterface
    {
        return new MallardDuck();
    }

    /**
     * Create redhead duck
     * @return QuackableInterface
     */
    public function createRedheadDuck(): QuackableInterface
    {
        return new RedheadDuck();
    }

    /**
     * Create duck call
     * @return QuackableInterface
     */
    public function createDuckCall(): QuackableInterface
    {
        return new DuckCall();
    }

    /**
     * Create rubber duck
     * @return QuackableInterface
     */
    public function createRubberDuck(): QuackableInterface
    {
        return new RubberDuck();
    }
}
