<?php

namespace Hfdp\Pattern\Strategy;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "<< Silence >><br />";
    }
}