<?php

namespace Hfdp\Pattern\Factory\Method;

class ChicagoStylePepperoniPizza extends Pizza
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = "Chicago Style Pepperoni Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";
        
        $this->toppings[] = "Shredded Mozzarella Cheese";
        $this->toppings[] = "Black Olives";
        $this->toppings[] = "Spinach";
        $this->toppings[] = "Eggplant";
        $this->toppings[] = "Sliced Pepperoni";
    }
    
    /**
     * Cut
     */
    public function cut()
    {
        echo "Cutting the pizza into square slices<br />";
    }
}
