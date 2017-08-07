<?php

namespace Hfdp\Pattern\Factory\Simple;

class ClamPizza extends Pizza
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = "Clam Pizza";
        $this->dough = "Thin Crust";
        $this->sauce = "White garlic sauce";
        
        $this->toppings[] = "Clams";
        $this->toppings[] = "Grated parmesan cheese";
    }
}
