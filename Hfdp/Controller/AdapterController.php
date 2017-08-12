<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Adapter as Adapter;

class AdapterController
{
    /**
     * Main
     */
    public function main()
    {
        $duck = new Adapter\MallardDuck();
        $turkey = new Adapter\WildTurkey();
        $turkeyAdapter = new Adapter\TurkeyAdapter($turkey);

        echo "The Turkey says...<br />";
        $turkey->gobble();
        $turkey->fly();

        echo "<br />The Duck says...<br />";
        $this->testDuck($duck);

        echo "<br />The TurkeyAdapter says...<br />";
        $this->testDuck($turkeyAdapter);
    }

    public function testDuck(Adapter\DuckInterface $duck)
    {
        $duck->quack();
        $duck->fly();
    }
}
