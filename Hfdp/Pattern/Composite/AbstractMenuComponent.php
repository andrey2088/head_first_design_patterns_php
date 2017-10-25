<?php

namespace Hfdp\Pattern\Composite;

abstract class AbstractMenuComponent
{
    /**
     * Add
     * @param AbstractMenuComponent $menuComponent
     * @throws \BadMethodCallException
     */
    public function add(AbstractMenuComponent $menuComponent): void
    {
        throw new \BadMethodCallException();
    }

    /**
     * Remove
     * @param int $i
     * @throws \BadMethodCallException
     */
    public function remove(int $i): void
    {
        throw new \BadMethodCallException();
    }

    /**
     * Get child
     * @param int $i
     * @throws \BadMethodCallException
     * @return mixed
     */
    public function getChild(int $i)
    {
        throw new \BadMethodCallException();
    }

    /**
     * Get name
     * @throws \BadMethodCallException
     * @return string
     */
    public function getName(): string
    {
        throw new \BadMethodCallException();
    }

    /**
     * Get description
     * @throws \BadMethodCallException
     * @return string
     */
    public function getDescription(): string
    {
        throw new \BadMethodCallException();
    }

    /**
     * Get price
     * @throws \BadMethodCallException
     * @return float
     */
    public function getPrice(): float
    {
        throw new \BadMethodCallException();
    }

    /**
     * Is vegetarian
     * @throws \BadMethodCallException
     * @return bool
     */
    public function isVegetarian(): bool
    {
        throw new \BadMethodCallException();
    }

    /**
     * Print
     * @throws \BadMethodCallException
     */
    public function printt(): void
    {
        throw new \BadMethodCallException();
    }
}
