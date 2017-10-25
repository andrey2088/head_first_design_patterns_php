<?php

namespace Hfdp\Pattern\Composite;

class Waitress
{
    /**
     * @var AbstractMenuComponent
     */
    private $allMenus;

    /**
     * Constructor
     * @param AbstractMenuComponent $allMenus
     */
    public function __construct(AbstractMenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    /**
     * Print menu
     */
    public function printMenu(): void
    {
        $this->allMenus->printt();
    }

    /**
     * Print vegetarian menu
     */
    public function printVegetarianMenu(): void
    {
        $iterator = $this->allMenus->createIterator();

        echo "VEGETARIAN MENU<br />----<br />";
        while ($iterator->valid()) {
            $menuComponent = $iterator->current();
            $iterator->next();
            try {
                if ($menuComponent->isVegetarian()) {
                    $menuComponent->printt();
                }
            } catch (\BadMethodCallException $e) {}
        }
    }
}
