<?php

namespace Hfdp\Pattern\Strategy;

class DecoyDuck extends AbstractDuck
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    /**
     * Display
     */
    public function display(): void
    {
        echo "I'm a duck Decoy<br />";
    }
}
