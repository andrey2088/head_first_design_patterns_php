<?php

namespace Hfdp\Pattern\State;

class SoldOutState implements StateInterface
{
    /**
     * @var GumballMachine
     */
    private $gumballMachine;

    /**
     * Constructor
     * @param GumballMachine $gumballMachine
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    /**
     * Insert quarter
     */
    public function insertQuarter()
    {
        echo "You can't insert a quarter, the machine is sold out<br />";
    }

    /**
     * Eject quarter
     */
    public function ejectQuarter()
    {
        echo "You can't eject, you haven't inserted a quarter yet<br />";
    }

    /**
     * Turn crank
     */
    public function turnCrank()
    {
        echo "You turned, but there are no gumballs<br />";
    }

    /**
     * Dispense
     */
    public function dispense()
    {
        echo "No gumball dispensed<br />";
    }

    /**
     * Magic method
     */
    public function __toString()
    {
        return "sold out";
    }
}
