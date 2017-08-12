<?php

namespace Hfdp\Pattern\Adapter;

class MallardDuck implements DuckInterface
{
    /**
     * Quack
     */
    public function quack()
    {
        echo "Quack<br />";
    }

    /**
     * Fly
     */
    public function fly()
    {
        echo "I'm flying<br />";
    }
}
