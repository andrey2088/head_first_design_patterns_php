<?php

namespace Hfdp\Pattern\Strategy;

class FlyRocketPowered implements FlyBehaviorInterface
{
    /**
     * Fly
     */
    public function fly(): void
    {
        echo "I'm flying with a rocket!<br />";
    }
}