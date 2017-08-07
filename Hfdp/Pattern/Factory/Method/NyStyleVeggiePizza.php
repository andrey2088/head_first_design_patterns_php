<?php

namespace Hfdp\Pattern\Factory\Method;

class NyStyleVeggiePizza extends Pizza
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = "NY Style Veggie Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        
        $this->toppings[] = "Grated Reggiano Cheese";
        $this->toppings[] = "Garlic";
        $this->toppings[] = "Onion";
        $this->toppings[] = "Mushrooms";
        $this->toppings[] = "Red Pepper";
    }
}
