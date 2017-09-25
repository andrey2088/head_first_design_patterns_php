<?php

namespace Hfdp\Pattern\Strategy;

class Sqeck implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "Sqeck<br />";
    }
}