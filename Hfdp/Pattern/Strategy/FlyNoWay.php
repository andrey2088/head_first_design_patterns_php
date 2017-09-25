<?php

namespace Hfdp\Pattern\Strategy;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I can't fly<br />";
    }
}