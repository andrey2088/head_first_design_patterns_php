<?php

namespace Hfdp\Pattern\Strategy;

class Quack implements QuackBehaviorInterface
{
    /**
     * Quack
     */
    public function quack(): void
    {
        echo "Quack<br />";
    }
}