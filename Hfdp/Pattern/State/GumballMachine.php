<?php

namespace Hfdp\Pattern\State;

class GumballMachine
{
    /**
     * @var StateInterface
     */
    private $soldOutState;

    /**
     * @var StateInterface
     */
    private $noQuarterState;

    /**
     * @var StateInterface
     */
    private $hasQuarterState;

    /**
     * @var StateInterface
     */
    private $soldState;

    /**
     * @var StateInterface
     */
    private $winnerState;

    /**
     * @var StateInsterface
     */
    private $state;

    /**
     * @var int
     */
    private $count = 0;

    /**
     * Constructor
     * @param int $numberGumballs
     */
    public function __construct(int $numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->state = $this->soldOutState;

        $this->count = $numberGumballs;
        if ($this->count > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    /**
     * Insert quarter
     */
    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    /**
     * Eject quarter
     */
    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    /**
     * Turn crank
     */
    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    /**
     * Set state
     * @param StateInterface $state
     */
    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }

    /**
     * Release ball
     */
    public function releaseBall()
    {
        echo "A gumball comes rolling out the slot...<br />";
        if ($this->count != 0) {
            $this->count--;
        }
    }

    /**
     * Get count
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Get soldOutState
     * @return StateInterface
     */
    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    /**
     * Get noQuarterState
     * @return StateInterface
     */
    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    /**
     * Get hasQuarterState
     * @return StateInterface
     */
    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    /**
     * Get soldState
     * @return StateInterface
     */
    public function getSoldState()
    {
        return $this->soldState;
    }

    /**
     * Get winnerState
     * @return StateInterface
     */
    public function getWinnerState()
    {
        return $this->winnerState;
    }

    /**
     * Refill
     * @param int $numGumBalls
     */
    public function refill(int $numGumBalls)
    {
		$this->count = $numGumBalls;
		$this->state = $this->noQuarterState;
	}

    /**
     * Magic method
     * @return string
     */
	public function __toString()
    {
		$result = "<br />Mighty Gumball, Inc.<br />";
		$result .= "Java-enabled Standing Gumball Model #2004<br />";
		$result .= "Inventory: " . $this->count . " gumball";
		if ($this->count != 1) {
			$result .= "s";
		}

        $result .= "<br />Machine is " . $this->state . "<br /><br />";

		return $result;
	}
}
