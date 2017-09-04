<?php

namespace Hfdp\Pattern\Composite;

abstract class AbstractMenuComponent
{
    /**
     * Add
     * @param AbstractMenuComponent $menuComponent
     * @throws \BadMethodCallException
     */
    public function add(AbstractMenuComponent $menuComponent)
    {
        throw new \BadMethodCallException();
    }

    /**
     * Remove
     * @param AbstractMenuComponent $menuComponent
     * @throws \BadMethodCallException
     */
    public function remove(AbstractMenuComponent $menuComponent)
    {
        throw new \BadMethodCallException();
    }

    /**
     * Get child
     * @param int $i
     * @throws \BadMethodCallException
     */
    public function getChild(int $i)
    {
        throw new \BadMethodCallException();
    }

    /**
     * Get name
     * @throws \BadMethodCallException
     */
    public function getName()
    {
        throw new \BadMethodCallException();
    }

    /**
     * Get description
     * @throws \BadMethodCallException
     */
    public function getDescription()
    {
        throw new \BadMethodCallException();
    }

    /**
     * Get price
     * @throws \BadMethodCallException
     */
    public function getPrice()
    {
        throw new \BadMethodCallException();
    }

    /**
     * Is vegetarian
     * @throws \BadMethodCallException
     */
    public function isVegetarian()
    {
        throw new \BadMethodCallException();
    }

    /**
     * Print
     * @throws \BadMethodCallException
     */
    public function printt()
    {
        throw new \BadMethodCallException();
    }
}
