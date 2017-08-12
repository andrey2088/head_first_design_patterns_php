<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Factory\Simple as SimpleFactory;
use Hfdp\Pattern\Factory\Method as FactoryMethod;
use Hfdp\Pattern\Factory\Abstractt as AbstractFactory;

class FactoryController
{
    /**
     * Main
     */
    public static function main()
    {
        // simple factory
        echo "<b>Simple Factory</b><br /><br />";

        $factory = new SimpleFactory\SimplePizzaFactory();
        $store = new SimpleFactory\PizzaStore($factory);

        $pizza = $store->orderPizza("cheese");
        echo "We ordered a " . $pizza->getName() . "<br /><br />";

        $pizza = $store->orderPizza("veggie");
        echo "We ordered a " . $pizza->getName() . "<br /><br />";


        // factory method
        echo "<br /><b>Factory Method</b><br /><br />";

        $nyStore = new FactoryMethod\NyPizzaStore();
        $chicagoStore = new FactoryMethod\ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza("cheese");
        echo "Ethan ordered a " . $pizza->getName() . "<br /><br />";

        $pizza = $chicagoStore->orderPizza("cheese");
        echo "Joel ordered a " . $pizza->getName() . "<br /><br />";

        $pizza = $nyStore->orderPizza("clam");
        echo "Ethan ordered a " . $pizza->getName() . "<br /><br />";

        $pizza = $chicagoStore->orderPizza("clam");
        echo "Joel ordered a " . $pizza->getName() . "<br /><br />";

        $pizza = $nyStore->orderPizza("pepperoni");
        echo "Ethan ordered a " . $pizza->getName() . "<br /><br />";

        $pizza = $chicagoStore->orderPizza("pepperoni");
        echo "Joel ordered a " . $pizza->getName() . "<br /><br />";

        $pizza = $nyStore->orderPizza("veggie");
        echo "Ethan ordered a " . $pizza->getName() . "<br /><br />";

        $pizza = $chicagoStore->orderPizza("veggie");
        echo "Joel ordered a " . $pizza->getName() . "<br /><br />";


        // abstract factory
        echo "<br /><b>Abstract Factory</b><br /><br />";

        $nyStore = new AbstractFactory\NyPizzaStore();
        $chicagoStore = new AbstractFactory\ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza("cheese");
        echo "Ethan ordered a " . $pizza . "<br />";

        $pizza = $chicagoStore->orderPizza("cheese");
        echo "Ethan ordered a " . $pizza . "<br />";

        $pizza = $nyStore->orderPizza("clam");
        echo "Ethan ordered a " . $pizza . "<br />";

        $pizza = $chicagoStore->orderPizza("clam");
        echo "Ethan ordered a " . $pizza . "<br />";

        $pizza = $nyStore->orderPizza("pepperoni");
        echo "Ethan ordered a " . $pizza . "<br />";

        $pizza = $chicagoStore->orderPizza("pepperoni");
        echo "Ethan ordered a " . $pizza . "<br />";

        $pizza = $nyStore->orderPizza("veggie");
        echo "Ethan ordered a " . $pizza . "<br />";

        $pizza = $chicagoStore->orderPizza("veggie");
        echo "Ethan ordered a " . $pizza . "<br />";
    }
}
