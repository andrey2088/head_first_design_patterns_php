<?php

namespace Hfdp\Pattern\Factory\Method;

class ChicagoPizzaStore extends PizzaStore
{
    /**
     * Create pizza
     * @param string $item
     * @return Pizza
     */
    public function createPizza($item)
    {
        if (strcmp($item, "cheese") === 0) {
            return new ChicagoStyleCheesePizza();
        } if (strcmp($item, "clam") === 0) {
            return new ChicagoStyleClamPizza();
        } if (strcmp($item, "pepperoni") === 0) {
            return new ChicagoStylePepperoniPizza();
        } if (strcmp($item, "veggie") === 0) {
            return new ChicagoStyleVeggiePizza();
        } else {
            return null;
        }
    }
}
