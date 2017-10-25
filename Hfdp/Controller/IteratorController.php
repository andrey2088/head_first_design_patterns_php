<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Iterator as Iterator;

class IteratorController
{
    /**
     * Main
     */
    public static function main(): void
    {
        $pancakeHouseMenu = new Iterator\PancakeHouseMenu();
        $dinerManu = new Iterator\DinerMenu();
        $cafeMenu = new Iterator\CafeMenu();

        $waitress = new Iterator\Waitress($pancakeHouseMenu, $dinerManu, $cafeMenu);

        $waitress->printMenu();
        $waitress->printVegetarianMenu();

        echo "<br /><br />Customer asks, is the Hotdog vegetarian?<br />";
		echo "Waitress says: ";
		if ($waitress->isItemVegetarian("Hotdog")) {
			echo "Yes<br />";
		} else {
			echo "No<br />";
		}
		echo "<br />Customer asks, are the Waffles vegetarian?<br />";
		echo "Waitress says: ";
		if ($waitress->isItemVegetarian("Waffles")) {
			echo "Yes<br />";
		} else {
			echo "No<br />";
		}
    }

}
