<?php

namespace Hfdp\Pattern\Factory\Simple;

class PepperoniPizza extends Pizza
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = "Pepperoni Pizza";
        $this->dough = "Crust";
        $this->sauce = "Marinara sauce";
        
        $this->toppings[] = "Sliced Pepperoni";
        $this->toppings[] = "Sliced Onion";
        $this->toppings[] = "Grated parmesan cheese";
    }
}
