<?php

namespace Hfdp\Pattern\Strategy;

class FlyNoWay implements FlyBehaviorInterface
{
    /**
     * Fly
     */
    public function fly(): void
    {
        echo "I can't fly<br />";
    }
}