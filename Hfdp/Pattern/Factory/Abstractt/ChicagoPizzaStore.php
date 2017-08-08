<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class ChicagoPizzaStore extends AbstractPizzaStore
{
    /**
     * Create pizza
     * @param string $item
     * @return AbstractPizza
     */
    protected function createPizza($item)
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        
        if (strcmp($item, "cheese") === 0) {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("Chicago Style Cheese Pizza");
        } if (strcmp($item, "clam") === 0) {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName("Chicago Style Clam Pizza");
        } if (strcmp($item, "pepperoni") === 0) {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("Chicago Style Pepperoni Pizza");
        } if (strcmp($item, "veggie") === 0) {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("Chicago Style Veggie Pizza");
        }
        
        return $pizza;
    }
}
