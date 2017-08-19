<?php

namespace Hfdp\Pattern\Iterator;

class PancakeHouseMenu implements MenuInterface
{
    /**
     * @var \ArrayObject
     */
    private $menuItems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->menuItems = new \ArrayObject();

        $this->addItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", true, 2.99);
		$this->addItem("Regular Pancake Breakfast", "Pancakes with fried eggs, sausage", false, 2.99);
		$this->addItem("Blueberry Pancakes", "Pancakes made with fresh blueberries, and blueberry syrup", true, 3.49);
		$this->addItem("Waffles", "Waffles, with your choice of blueberries or strawberries", true, 3.59);
    }

    /**
     * Add item
     * @param string $name
     * @param string $description
     * @param bool $vegetarian
     * @param float $price
     */
    public function addItem(string $name, string $description, bool $vegetarian, float $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems->append($menuItem);
    }

    /**
     * Get menu items
     * @return \ArrayObject
     */
    public function getMenuItems()
    {
        return $this->menuItems;
    }

    /**
     * Create iterator
     * @return ArrayIterator
     */
    public function createIterator()
    {
        return $this->menuItems->getIterator();
    }
}
