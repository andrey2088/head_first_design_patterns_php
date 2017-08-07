<?php

namespace Hfdp\Pattern\Strategy;

class Quack implements QuackBehaviorInterface
{
    public function quack()
    {
        $message = "Quack";
        \Hfdp\Utils::outputWithBr($message);
    }
}