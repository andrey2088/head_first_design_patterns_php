<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    /**
     * Create dough
     * @return DoughInterface
     */
    public function createDough(): DoughInterface
    {
        return new ThickCrustDough();
    }

    /**
     * Create sauce
     * @return SauceInterface
     */
    public function createSauce(): SauceInterface
    {
        return new PlumTomatoSauce();
    }

    /**
     * Create cheese
     * @return CheeseInterface
     */
    public function createCheese(): CheeseInterface
    {
        return new MozarellaCheese();
    }

    /**
     * Create veggies
     * @return VeggiesInterface[]
     */
    public function createVeggies(): array
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
        return new FrozenClams();
    }
}

