<?php

namespace Hfdp\Pattern\Iterator;

class MenuItem
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $vegetarian;

    /**
     * @var float
     */
    private $price;

    /**
     * Constructor
     * @param string $name
     * @param string $description
     * @param bool $vegetarian
     * @param float $price
     */
    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    /**
     * Get name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Is vegetarian
     * @return bool
     */
    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    /**
     * Get price
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
