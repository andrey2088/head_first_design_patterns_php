<?php

namespace Hfdp\Pattern\Factory\Method;

abstract class AbstractPizza
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $dough;

    /**
     * @var string
     */
    public $sauce;

    /**
     * @var array
     */
    public $toppings = array();

    /**
     * Prepare
     */
    public function prepare(): void
    {
        $message = "Preparing " . $this->name . "<br />";
        $message .= "Tossing dough...<br />";
        $message .= "Adding sauce...<br />";
        $message .= "Adding toppings: <br />";

        foreach ($this->toppings as $topping) {
            $message .= "&emsp;&emsp;" . $topping . "<br />";
        }
        echo $message;
    }

    /**
     * Bake
     */
    public function bake(): void
    {
        echo "Bake for 25 minutes at 350<br />";
    }

    /**
     * Cut
     */
    public function cut(): void
    {
        echo "Cutting the pizza into diagonal slices<br />";
    }

    /**
     * Box
     */
    public function box(): void
    {
        echo "Place pizza in official PizzaStore box<br />";
    }

    /**
     * Returns name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
