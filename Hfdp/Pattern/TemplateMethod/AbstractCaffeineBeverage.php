<?php

namespace Hfdp\Pattern\TemplateMethod;

abstract class AbstractCaffeineBeverage
{
    /**
     * Prepare recipe
     */
    final public function prepareRecipe()
    {
        $this->boliWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    /**
     * Brew
     */
    abstract public function brew();

    /**
     * Add condiments
     */
    abstract public function addCondiments();

    /**
     * Boil water
     */
    final public function boliWater()
    {
        echo "Boiling water<br />";
    }

    /**
     * Pour in cup
     */
    final public function pourInCup()
    {
        echo "Pouring into cup<br />";
    }

    /**
     *
     * @return bool
     */
    public function customerWantsCondiments()
    {
        return true;
    }
}
