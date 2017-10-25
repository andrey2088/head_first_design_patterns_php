<?php

namespace Hfdp\Pattern\Factory\Method;

class NyPizzaStore extends AbstractPizzaStore
{
    /**
     * Create pizza
     * @param string $item
     * @return AbstractPizza
     */
    public function createPizza($item): AbstractPizza
    {
        if (strcmp($item, "cheese") === 0) {
            return new NyStyleCheesePizza();
        } if (strcmp($item, "clam") === 0) {
            return new NyStyleClamPizza();
        } if (strcmp($item, "pepperoni") === 0) {
            return new NyStylePepperoniPizza();
        } if (strcmp($item, "veggie") === 0) {
            return new NyStyleVeggiePizza();
        } else {
            return null;
        }
    }
}
