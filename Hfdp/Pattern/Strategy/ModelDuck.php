<?php

namespace Hfdp\Pattern\Strategy;

class ModelDuck extends Duck
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
        $message = "I'm a model duck";
        \Hfdp\Utils::output($message);
    }
}
