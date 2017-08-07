<?php

namespace Hfdp\Pattern\Factory\Abstractt;

interface PizzaIngredientFactoryInterface
{
    /**
     * Create dough
     * @return DoughInterface
     */
    public function createDough();
    
    /**
     * Create sauce
     * @return SauceInterface
     */
    public function createSauce();
    
    /**
     * Create cheese
     * @return CheeseInterface
     */
    public function createCheese();
    
    /**
     * Create veggies
     * @return array<VeggiesInterface>
     */
    public function createVeggies();
    
    /**
     * Create pepperoni
     * @return PepperoniInterface
     */
    public function createPepperoni();
    
    /**
     * Create clam
     * @return ClamInterface
     */
    public function createClam();
}

