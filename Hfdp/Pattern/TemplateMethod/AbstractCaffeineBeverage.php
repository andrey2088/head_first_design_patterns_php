<?php

namespace Hfdp\Pattern\TemplateMethod;

abstract class AbstractCaffeineBeverage
{
    /**
     * Prepare recipe
     */
    final public function prepareRecipe(): void
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
    abstract public function brew(): void;

    /**
     * Add condiments
     */
    abstract public function addCondiments(): void;

    /**
     * Boil water
     */
    final public function boliWater(): void
    {
        echo "Boiling water<br />";
    }

    /**
     * Pour in cup
     */
    final public function pourInCup(): void
    {
        echo "Pouring into cup<br />";
    }

    /**
     * Is customer wants condiments?
     * @return bool
     */
    public function customerWantsCondiments(): bool
    {
        return true;
    }
}
