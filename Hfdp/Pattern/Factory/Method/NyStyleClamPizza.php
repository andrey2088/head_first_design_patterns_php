<?php

namespace Hfdp\Pattern\Factory\Method;

class NyStyleClamPizza extends AbstractPizza
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
