<?php

namespace Hfdp\Pattern\Factory\Method;

class ChicagoStyleCheesePizza extends Pizza
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = "Chicago Style Deep Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";
        
        $this->toppings[] = "Shredded Mozzarella Cheese";
    }
    
    /**
     * Cut
     */
    public function cut()
    {
        echo "Cutting the pizza into square slices<br />";
    }
}
