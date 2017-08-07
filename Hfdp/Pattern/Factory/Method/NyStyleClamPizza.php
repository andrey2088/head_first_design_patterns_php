<?php

namespace Hfdp\Pattern\Factory\Method;

class NyStyleClamPizza extends Pizza
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = "NY Style Clam Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        
        $this->toppings[] = "Grated Reggiano Cheese";
        $this->toppings[] = "Fresh Clams from Long Island Sound";
    }
}
