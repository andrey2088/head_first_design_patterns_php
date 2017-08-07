<?php

namespace Hfdp\Pattern\Strategy;

class Sqeck implements QuackBehaviorInterface
{
    public function quack()
    {
        $message = "Sqeck";
        \Hfdp\Utils::outputWithBr($message);
    }
}