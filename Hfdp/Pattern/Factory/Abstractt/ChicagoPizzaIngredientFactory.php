<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    /**
     * Create dough
     * @return DoughInterface
     */
    public function createDough()
    {
        return new ThickCrustDough();
    }

    /**
     * Create sauce
     * @return SauceInterface
     */
    public function createSauce()
    {
        return new PlumTomatoSauce();
    }

    /**
     * Create cheese
     * @return CheeseInterface
     */
    public function createCheese()
    {
        return new MozarellaCheese();
    }

    /**
     * Create veggies
     * @return VeggiesInterface[]
     */
    public function createVeggies()
    {
        $veggies = array(
            new BlackOlives(),
            new Spinach(),
            new EggPlant()
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
        return new FrozenClams();
    }
}

