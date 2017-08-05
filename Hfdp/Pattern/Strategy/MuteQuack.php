<?php

namespace Hfdp\Pattern\Strategy;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        $message = "<< Silence >>";
        \Hfdp\Utils::output($message);
    }
}