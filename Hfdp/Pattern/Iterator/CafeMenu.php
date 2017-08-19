<?php

namespace Hfdp\Pattern\Iterator;

class CafeMenu implements MenuInterface
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

        $this->addItem("Veggie Burger and Air Fries", "Veggie burger on a whole wheat bun, lettuce, tomato, and fries",
			true, 3.99);
		$this->addItem("Soup of the day", "A cup of the soup of the day, with a side salad", false, 3.69);
		$this->addItem("Burrito", "A large burrito, with whole pinto beans, salsa, guacamole", true, 4.29);
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
