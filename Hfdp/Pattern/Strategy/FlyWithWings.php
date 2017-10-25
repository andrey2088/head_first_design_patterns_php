<?php

namespace Hfdp\Pattern\Strategy;

class FlyWithWings implements FlyBehaviorInterface
{
    /**
     * Fly
     */
    public function fly(): void
    {
        echo "I'm flying!<br />";
    }
}