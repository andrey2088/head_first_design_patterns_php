<?php

namespace Hfdp\Pattern\Factory\Method;

class ChicagoStyleClamPizza extends AbstractPizza
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = "Chicago Style Clam Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";
        
        $this->toppings[] = "Shredded Mozzarella Cheese";
        $this->toppings[] = "Frozen Clams from Chesapeake Bay";
    }
    
    /**
     * Cut
     */
    public function cut()
    {
        echo "Cutting the pizza into square slices<br />";
    }
}
