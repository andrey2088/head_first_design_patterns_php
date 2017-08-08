<?php

namespace Hfdp\Pattern\Factory\Simple;

class CheesePizza extends AbstractPizza
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = "Cheese Pizza";
        $this->dough = "Regular Crust";
        $this->sauce = "Marinara Pizza Sauce";
        
        $this->toppings[] = "Fresh Mozzarella";
        $this->toppings[] = "Parmesan";
    }
}
