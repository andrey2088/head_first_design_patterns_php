<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class NyPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    /**
     * Create dough
     * @return DoughInterface
     */
    public function createDough()
    {
        return new ThinCrustDough();
    }

    /**
     * Create sauce
     * @return SauceInterface
     */
    public function createSauce()
    {
        return new MarinaraSauce();
    }

    /**
     * Create cheese
     * @return CheeseInterface
     */
    public function createCheese()
    {
        return new ReggianoCheese();
    }

    /**
     * Create veggies
     * @return VeggiesInterface[]
     */
    public function createVeggies()
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
    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }

    /**
     * Create clam
     * @return ClamInterface
     */
    public function createClam()
    {
        return new FreshClams();
    }
}

