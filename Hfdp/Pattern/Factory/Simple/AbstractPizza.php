<?php

namespace Hfdp\Pattern\Factory\Simple;

abstract class AbstractPizza
{
    /**
     * @var string
     */
    public $name;
    
    /**
     * @var string
     */
    public $dough;
    
    /**
     * @var string
     */
    public $sauce;
    
    /**
     * @var array
     */
    public $toppings = array();
    
    /**
     * Prepare
     */
    public function prepare()
    {
        echo "Preparing " . $this->name . "<br />";
    }
    
    /**
     * Bake
     */
    public function bake()
    {
        echo "Bake for 25 minutes at 350<br />";
    }
    
    /**
     * Cut
     */
    public function cut()
    {
        echo "Cutting the pizza into diagonal slices<br />";
    }
    
    /**
     * Box
     */
    public function box()
    {
        echo "Place pizza in official PizzaStore box<br />";
    }
    
    /**
     * Returns name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
