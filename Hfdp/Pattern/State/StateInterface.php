<?php

namespace Hfdp\Pattern\State;

interface StateInterface
{
    /**
     * Insert quarter
     */
    public function insertQuarter(): void;

    /**
     * Eject quarter
     */
    public function ejectQuarter(): void;

    /**
     * Turn crank
     */
    public function turnCrank(): void;

    /**
     * Dispense
     */
    public function dispense(): void;
}
