<?php

namespace Hfdp\Pattern\Strategy;

class RubberDuck extends AbstractDuck
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Sqeck();
    }

    /**
     * Display
     */
    public function display()
    {
        echo "I'm a rubber duckie<br />";
    }
}
