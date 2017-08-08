<?php

namespace Hfdp\Pattern\Factory\Method;

class ChicagoStyleVeggiePizza extends AbstractPizza
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = "Chicago Style Deep Dish Veggie Pizza";
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
