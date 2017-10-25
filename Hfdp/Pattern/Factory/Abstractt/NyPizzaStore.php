<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class NyPizzaStore extends AbstractPizzaStore
{
    /**
     * Create pizza
     * @param string $item
     * @return AbstractPizza
     */
    protected function createPizza($item): AbstractPizza
    {
        $pizza = null;
        $ingredientFactory = new NyPizzaIngredientFactory();

        if (strcmp($item, "cheese") === 0) {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("New York Style Cheese Pizza");
        } if (strcmp($item, "clam") === 0) {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName("New York Style Clam Pizza");
        } if (strcmp($item, "pepperoni") === 0) {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("New York Style Pepperoni Pizza");
        } if (strcmp($item, "veggie") === 0) {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("New York Style Veggie Pizza");
        }

        return $pizza;
    }
}
