<?php

namespace Hfdp\Pattern\Strategy;

class FlyRocketPowered implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I'm flying with a rocket!<br />";
    }
}