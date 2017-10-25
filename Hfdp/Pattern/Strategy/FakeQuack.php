<?php

namespace Hfdp\Pattern\Strategy;

class FakeQuack implements QuackBehaviorInterface
{
    /**
     * Quack
     */
    public function quack(): void
    {
        echo "Qwak<br />";
    }
}