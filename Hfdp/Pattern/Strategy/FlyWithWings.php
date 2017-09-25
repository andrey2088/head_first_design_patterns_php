<?php

namespace Hfdp\Pattern\Strategy;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I'm flying!<br />";
    }
}