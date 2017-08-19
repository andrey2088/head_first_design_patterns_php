<?php

namespace Hfdp\Pattern\Iterator;

class Waitress
{
    /**
     * @var MenuInterface
     */
    private $pancakeHouseMenu;

    /**
     * @var MenuInterface
     */
    private $dinerMenu;

    /**
     * @var MenuInterface
     */
    private $cafeMenu;

    /**
     * Constructor
     * @param MenuInterface $pancakeHouseMenu
     * @param MenuInterface $dinerMenu
     * @param MenuInterface $cafeMenu
     */
    public function __construct(MenuInterface $pancakeHouseMenu, MenuInterface $dinerMenu, MenuInterface $cafeMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
        $this->cafeMenu = $cafeMenu;
    }

    /**
     * Print menu
     */
    public function printMenu()
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator = $this->dinerMenu->createIterator();
        $cafeIterator = $this->cafeMenu->createIterator();

        echo "MENU<br />----<br />BREAKFAST<br />";
		$this->printMenuPart($pancakeIterator);
		echo "<br />LUNCH<br />";
		$this->printMenuPart($dinerIterator);
		echo "<br />DINNER<br />";
		$this->printMenuPart($cafeIterator);
    }

    /**
     * Print menu part
     * @param \Iterator $iterator
     */
    private function printMenuPart(\Iterator $iterator)
    {
        while ($iterator->valid()) {
            $menuItem = $iterator->current();
            $iterator->next();
            echo $menuItem->getName() . ", ";
			echo $menuItem->getPrice() . " -- ";
			echo $menuItem->getDescription() . "<br />";
        }
    }

    /**
     * Print vegetarian menu
     */
    public function printVegetarianMenu()
    {
        echo "<br /><br />VEGETARIAN MENU<br />---------------<br />";
        $this->printVegetarianMenuPart($this->pancakeHouseMenu->createIterator());
        $this->printVegetarianMenuPart($this->dinerMenu->createIterator());
        $this->printVegetarianMenuPart($this->cafeMenu->createIterator());
    }

    /**
     * Is item vegetarian
     * @param string $name
     * @return bool
     */
    public function isItemVegetarian(string $name)
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
		if ($this->isVegetarian($name, $pancakeIterator)) {
			return true;
		}
        $dinerIterator = $this->dinerMenu->createIterator();
		if ($this->isVegetarian($name, $dinerIterator)) {
			return true;
		}
        $cafeIterator = $this->cafeMenu->createIterator();
		if ($this->isVegetarian($name, $cafeIterator)) {
			return true;
		}
        return false;
    }

    /**
     * Print vegetarian menu part
     * @param \Iterator $iterator
     */
    private function printVegetarianMenuPart(\Iterator $iterator) {
		while ($iterator->valid()) {
			$menuItem = $iterator->current();
            $iterator->next();
			if ($menuItem->isVegetarian()) {
				echo $menuItem->getName() . ", ";
                echo $menuItem->getPrice() . " -- ";
                echo $menuItem->getDescription() . "<br />";
			}
		}
	}

    /**
     * Is vegetarian
     * @param string $name
     * @param \Iterator $iterator
     * @return bool
     */
    private function isVegetarian(string $name, \Iterator $iterator) {
		while ($iterator->valid()) {
			$menuItem = $iterator->current();
            $iterator->next();
			if (strcmp($menuItem->getName(), $name) === 0) {
				if ($menuItem->isVegetarian()) {
					return true;
				}
			}
		}
		return false;
	}
}
