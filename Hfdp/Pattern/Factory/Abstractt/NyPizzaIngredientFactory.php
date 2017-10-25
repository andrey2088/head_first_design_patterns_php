<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class NyPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    /**
     * Create dough
     * @return DoughInterface
     */
    public function createDough(): DoughInterface
    {
        return new ThinCrustDough();
    }

    /**
     * Create sauce
     * @return SauceInterface
     */
    public function createSauce(): SauceInterface
    {
        return new MarinaraSauce();
    }

    /**
     * Create cheese
     * @return CheeseInterface
     */
    public function createCheese(): CheeseInterface
    {
        return new ReggianoCheese();
    }

    /**
     * Create veggies
     * @return VeggiesInterface[]
     */
    public function createVeggies(): array
    {
        $veggies = array(
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper()
        );

        return $veggies;
    }

    /**
     * Create pepperoni
     * @return PepperoniInterface
     */
    public function createPepperoni(): PepperoniInterface
    {
        return new SlicedPepperoni();
    }

    /**
     * Create clam
     * @return ClamsInterface
     */
    public function createClam(): ClamsInterface
    {
        return new FreshClams();
    }
}

