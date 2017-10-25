<?php

namespace Hfdp\Pattern\Strategy;

class MuteQuack implements QuackBehaviorInterface
{
    /**
     * Quack
     */
    public function quack(): void
    {
        echo "<< Silence >><br />";
    }
}