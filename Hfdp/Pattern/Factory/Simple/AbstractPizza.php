<?php

namespace Hfdp\Pattern\Factory\Simple;

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
        echo "Preparing " . $this->name . "<br />";
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
