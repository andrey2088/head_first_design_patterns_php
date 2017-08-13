<?php

namespace Hfdp\Pattern\Adapter;

class DuckAdapter implements TurkeyInterface
{
    /**
     * @var DuckInterface
     */
    private $duck;

    /**
     * Constructor
     * @param DuckInterface $duck
     */
    public function __construct(DuckInterface $duck)
    {
        $this->duck = $duck;
    }

    /**
     * Gobble
     */
    public function gobble()
    {
        $this->duck->quack();
    }

    /**
     * Fly
     */
    public function fly()
    {
        if (rand(0, 4)  == 0) {
            $this->duck->fly();
        }
    }
}
