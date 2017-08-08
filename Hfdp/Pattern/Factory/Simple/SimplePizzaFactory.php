<?php

namespace Hfdp\Pattern\Factory\Simple;

class SimplePizzaFactory
{
    /**
     * Create pizza
     * @param string $type
     * @return AbstractPizza
     */
    public function createPizza($type)
    {
        $pizza = null;
        
        if (strcmp($type, "cheese") === 0) {
            $pizza = new CheesePizza();
        } if (strcmp($type, "clam") === 0) {
            $pizza = new ClamPizza();
        } if (strcmp($type, "pepperoni") === 0) {
            $pizza = new PepperoniPizza();
        } if (strcmp($type, "veggie") === 0) {
            $pizza = new VeggiePizza();
        }
        
        return $pizza;
    }
}
