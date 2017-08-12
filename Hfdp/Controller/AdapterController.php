<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Adapter as Adapter;

class AdapterController
{
    /**
     * Main
     */
    public static function main()
    {
        $duck = new Adapter\MallardDuck();
        $turkey = new Adapter\WildTurkey();
        $turkeyAdapter = new Adapter\TurkeyAdapter($turkey);

        echo "The Turkey says...<br />";
        $turkey->gobble();
        $turkey->fly();

        echo "<br />The Duck says...<br />";
        self::testDuck($duck);

        echo "<br />The TurkeyAdapter says...<br />";
        self::testDuck($turkeyAdapter);
    }

    private static function testDuck(Adapter\DuckInterface $duck)
    {
        $duck->quack();
        $duck->fly();
    }
}
