<?php

namespace Hfdp\Pattern\Strategy;

class FakeQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "Qwak<br />";
    }
}