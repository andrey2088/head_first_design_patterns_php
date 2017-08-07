<?php

namespace Hfdp\Pattern\Strategy;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        $message = "I'm flying!";
        \Hfdp\Utils::outputWithBr($message);
    }
}