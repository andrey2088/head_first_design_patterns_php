<?php

namespace Hfdp\Pattern\Factory\Abstractt;

interface PizzaIngredientFactoryInterface
{
    /**
     * Create dough
     * @return DoughInterface
     */
    public function createDough(): DoughInterface;

    /**
     * Create sauce
     * @return SauceInterface
     */
    public function createSauce(): SauceInterface;

    /**
     * Create cheese
     * @return CheeseInterface
     */
    public function createCheese(): CheeseInterface;

    /**
     * Create veggies
     * @return VeggiesInterface[]
     */
    public function createVeggies(): array;

    /**
     * Create pepperoni
     * @return PepperoniInterface
     */
    public function createPepperoni(): PepperoniInterface;

    /**
     * Create clam
     * @return ClamsInterface
     */
    public function createClam(): ClamsInterface;
}

