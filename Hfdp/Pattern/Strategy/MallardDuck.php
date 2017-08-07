<?php

namespace Hfdp\Pattern\Strategy;

class MallardDuck extends Duck
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
    public function display()
    {
        $message = "I'm a real Mallard duck";
        \Hfdp\Utils::outputWithBr($message);
    }
}
