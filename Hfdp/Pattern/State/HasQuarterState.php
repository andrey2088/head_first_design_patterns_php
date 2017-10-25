<?php

namespace Hfdp\Pattern\State;

class HasQuarterState implements StateInterface
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
    public function insertQuarter(): void
    {
        echo "You can't insert another quarter<br />";
    }

    /**
     * Eject quarter
     */
    public function ejectQuarter(): void
    {
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        echo "Quarter returned<br />";
    }

    /**
     * Turn crank
     */
    public function turnCrank(): void
    {
        echo "You turned...<br />";
        if ((rand(0, 9) == 0) && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    /**
     * Dispense
     */
    public function dispense(): void
    {
        echo "No gumball dispensed<br />";
    }

    /**
     * Magic method
     */
    public function __toString(): string
    {
        return "waiting for turn of crank";
    }
}
