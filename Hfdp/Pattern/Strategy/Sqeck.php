<?php

namespace Hfdp\Pattern\Strategy;

class Sqeck implements QuackBehaviorInterface
{
    /**
     * Quack
     */
    public function quack(): void
    {
        echo "Sqeck<br />";
    }
}