<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class PepperoniPizza extends AbstractPizza
{
    /**
     * @var PizzaIngredientFactory
     */
    private $ingredientFactory;

    /**
     * Constructor
     * @param PizzaIngredientFactoryInterface $ingredientFactory
     */
    public function __construct(PizzaIngredientFactoryInterface $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    /**
     * Prepare
     */
    public function prepare(): void
    {
        echo "Preparing " . $this->name . "<br />";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
        $this->pepperoni = $this->ingredientFactory->createPepperoni();
    }
}
