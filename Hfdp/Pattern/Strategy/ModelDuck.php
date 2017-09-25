<?php

namespace Hfdp\Pattern\Strategy;

class ModelDuck extends AbstractDuck
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    /**
     * Display
     */
    public function display()
    {
        echo "I'm a model duck<br />";
    }
}
