<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class VeggiePizza extends Pizza
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
    public function prepare()
    {
        echo "Preparing " . $this->name . "<br />";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
    }
}
