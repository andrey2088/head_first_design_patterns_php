<?php

namespace Hfdp\Pattern\State;

class SoldState implements StateInterface
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
        echo "Please wait, we're already giving you a gumball<br />";
    }

    /**
     * Eject quarter
     */
    public function ejectQuarter(): void
    {
        echo "Sorry, you already turned the crank<br />";
    }

    /**
     * Turn crank
     */
    public function turnCrank(): void
    {
        echo "Turning twice doesn't get you another gumball!<br />";
    }

    /**
     * Dispense
     */
    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs!<br />";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

    /**
     * Magic method
     */
    public function __toString(): string
    {
        return "delivering a gumball";
    }
}
