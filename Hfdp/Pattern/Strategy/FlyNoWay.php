<?php

namespace Hfdp\Pattern\Strategy;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        $message = "I can't fly";
        \Hfdp\Utils::output($message);
    }
}