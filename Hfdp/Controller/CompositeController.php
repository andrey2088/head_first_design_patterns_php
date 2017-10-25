<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Composite as Composite;

class CompositeController
{
    /**
     * Main
     */
    public static function main(): void
    {
        $pancakeHouseMenu = new Composite\Menu("PANCAKE HOUSE MENU", "Breakfast");
		$dinerMenu = new Composite\Menu("DINER MENU", "Lunch");
		$cafeMenu = new Composite\Menu("CAFE MENU", "Dinner");
		$dessertMenu = new Composite\Menu("DESSERT MENU", "Dessert of course!");

        $allMenus = new Composite\Menu("ALL MENUS", "All menus combined");

        $allMenus->add($pancakeHouseMenu);
        $allMenus->add($dinerMenu);
        $allMenus->add($cafeMenu);

        $pancakeHouseMenu->add(new Composite\MenuItem(
			"K&B's Pancake Breakfast",
			"Pancakes with scrambled eggs, and toast",
			true,
			2.99));
		$pancakeHouseMenu->add(new Composite\MenuItem(
			"Regular Pancake Breakfast",
			"Pancakes with fried eggs, sausage",
			false,
			2.99));
		$pancakeHouseMenu->add(new Composite\MenuItem(
			"Blueberry Pancakes",
			"Pancakes made with fresh blueberries, and blueberry syrup",
			true,
			3.49));
		$pancakeHouseMenu->add(new Composite\MenuItem(
			"Waffles",
			"Waffles, with your choice of blueberries or strawberries",
			true,
			3.59));

		$dinerMenu->add(new Composite\MenuItem(
			"Vegetarian BLT",
			"(Fakin') Bacon with lettuce & tomato on whole wheat",
			true,
			2.99));
		$dinerMenu->add(new Composite\MenuItem(
			"BLT",
			"Bacon with lettuce & tomato on whole wheat",
			false,
			2.99));
		$dinerMenu->add(new Composite\MenuItem(
			"Soup of the day",
			"A bowl of the soup of the day, with a side of potato salad",
			false,
			3.29));
		$dinerMenu->add(new Composite\MenuItem(
			"Hotdog",
			"A hot dog, with saurkraut, relish, onions, topped with cheese",
			false,
			3.05));
		$dinerMenu->add(new Composite\MenuItem(
			"Steamed Veggies and Brown Rice",
			"A medly of steamed vegetables over brown rice",
			true,
			3.99));
        $dinerMenu->add(new Composite\MenuItem(
			"Pasta",
			"Spaghetti with Marinara Sauce, and a slice of sourdough bread",
			true,
			3.89));

		$dinerMenu->add($dessertMenu);

		$dessertMenu->add(new Composite\MenuItem(
			"Apple Pie",
			"Apple pie with a flakey crust, topped with vanilla icecream",
			true,
			1.59));
		$dessertMenu->add(new Composite\MenuItem(
			"Cheesecake",
			"Creamy New York cheesecake, with a chocolate graham crust",
			true,
			1.99));
		$dessertMenu->add(new Composite\MenuItem(
			"Sorbet",
			"A scoop of raspberry and a scoop of lime",
			true,
			1.89));
        //$dessertMenu->add($cafeMenu);

		$cafeMenu->add(new Composite\MenuItem(
			"Veggie Burger and Air Fries",
			"Veggie burger on a whole wheat bun, lettuce, tomato, and fries",
			true,
			3.99));
		$cafeMenu->add(new Composite\MenuItem(
			"Soup of the day",
			"A cup of the soup of the day, with a side salad",
			false,
			3.69));
		$cafeMenu->add(new Composite\MenuItem(
			"Burrito",
			"A large burrito, with whole pinto beans, salsa, guacamole",
			true,
			4.29));

		$waitress = new Composite\Waitress($allMenus);

		$waitress->printVegetarianMenu();
    }

}
