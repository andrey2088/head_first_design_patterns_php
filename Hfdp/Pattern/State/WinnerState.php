<?php

namespace Hfdp\Pattern\State;

class WinnerState implements StateInterface
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
        echo "Please wait, we're already giving you a gumball<br />";
    }

    /**
     * Eject quarter
     */
    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank<br />";
    }

    /**
     * Turn crank
     */
    public function turnCrank()
    {
        echo "Turning twice doesn't get you another gumball!<br />";
    }

    /**
     * Dispense
     */
    public function dispense()
    {
        echo "YOU'RE A WINNER! You get two gumballs for your quarter<br />";
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo "Oops, out of gumballs!<br />";
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }

    /**
     * Magic method
     */
    public function __toString()
    {
        return "delivering a gumball";
    }
}