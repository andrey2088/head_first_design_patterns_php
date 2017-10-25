<?php

namespace Hfdp\Pattern\Strategy;

class RedHeadDuck extends AbstractDuck
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    /**
     * Display
     */
    public function display(): void
    {
        echo "I'm a real Red Headed duck<br />";
    }
}
