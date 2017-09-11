<?php

namespace Hfdp\Pattern\State;

interface StateInterface
{
    /**
     * Insert quarter
     */
    public function insertQuarter();

    /**
     * Eject quarter
     */
    public function ejectQuarter();

    /**
     * Turn crank
     */
    public function turnCrank();

    /**
     * Dispense
     */
    public function dispense();
}
