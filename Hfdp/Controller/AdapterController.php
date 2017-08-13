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
        $duckAdapter = new Adapter\DuckAdapter($duck);

        echo "The Turkey says...<br />";
        self::testTurkey($turkey);

        echo "<br />The Duck says...<br />";
        self::testDuck($duck);

        echo "<br />The TurkeyAdapter says...<br />";
        self::testDuck($turkeyAdapter);

        echo "<br />The DuckAdapter says...<br />";
        self::testTurkey($duckAdapter);
    }

    /**
     * Test duck
     * @param DuckInterface $duck
     */
    private static function testDuck(Adapter\DuckInterface $duck)
    {
        $duck->quack();
        $duck->fly();
    }

    /**
     * Test turkey
     * @param TurkeyInterface $turkey
     */
    private static function testTurkey(Adapter\TurkeyInterface $turkey)
    {
        $turkey->gobble();
        $turkey->fly();
    }
}
