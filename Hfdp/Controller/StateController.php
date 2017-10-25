<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\State as State;

class StateController
{
    /**
     * Main
     */
    public static function main(): void
    {
        $gumballMachine = new State\GumballMachine(5);

        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->ejectQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->ejectQuarter();

        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine;
    }

}
