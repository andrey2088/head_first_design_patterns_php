<?php

namespace Hfdp\Pattern\Strategy;

class FlyRocketPowered implements FlyBehaviorInterface
{
    public function fly()
    {
        $message = "I'm flying with a rocked!";
        \Hfdp\Utils::output($message);
    }
}