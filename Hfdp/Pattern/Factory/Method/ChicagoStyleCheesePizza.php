<?php

namespace Hfdp\Pattern\Factory\Method;

class ChicagoStyleCheesePizza extends AbstractPizza
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
    public function cut(): void
    {
        echo "Cutting the pizza into square slices<br />";
    }
}
