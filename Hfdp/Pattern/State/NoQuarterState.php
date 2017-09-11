<?php

namespace Hfdp\Pattern\State;

class NoQuarterState implements StateInterface
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
        echo "You inserted a quarter<br />";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    /**
     * Eject quarter
     */
    public function ejectQuarter()
    {
        echo "You haven't inserted a quarter<br />";
    }

    /**
     * Turn crank
     */
    public function turnCrank()
    {
        echo "You turned but there's no quarter<br />";
    }

    /**
     * Dispense
     */
    public function dispense()
    {
        echo "You need to pay first<br />";
    }

    /**
     * Magic method
     */
    public function __toString()
    {
        return "waiting for quarter";
    }
}
