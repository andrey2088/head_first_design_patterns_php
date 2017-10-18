<?php

namespace Hfdp\Pattern\Combining;

class DuckFactory extends AbstractDuckFactory
{
    /**
     * Create mallard duck
     * @return QuackableInterface
     */
    public function createMallardDuck()
    {
        return new MallardDuck();
    }

    /**
     * Create redhead duck
     * @return QuackableInterface
     */
    public function createRedheadDuck()
    {
        return new RedheadDuck();
    }

    /**
     * Create duck call
     * @return QuackableInterface
     */
    public function createDuckCall()
    {
        return new DuckCall();
    }

    /**
     * Create rubber duck
     * @return QuackableInterface
     */
    public function createRubberDuck()
    {
        return new RubberDuck();
    }
}
