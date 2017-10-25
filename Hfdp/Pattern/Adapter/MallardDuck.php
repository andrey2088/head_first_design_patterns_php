<?php

namespace Hfdp\Pattern\Adapter;

class MallardDuck implements DuckInterface
{
    /**
     * Quack
     */
    public function quack(): void
    {
        echo "Quack<br />";
    }

    /**
     * Fly
     */
    public function fly(): void
    {
        echo "I'm flying<br />";
    }
}
