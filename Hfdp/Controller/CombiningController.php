<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Combining as Combining;

class CombiningController
{
    /**
     * Main
     */
    public static function main(): void
    {
        $duckFactory = new Combining\CountingDuckFactory();
        self::go($duckFactory);
    }

    /**
     * Go
     */
    private static function go(Combining\AbstractDuckFactory $duckFactory): void
    {
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new Combining\GooseAdapter(new Combining\Goose());
        echo "Duck Simulator: With Composite - Flocks<br />";

        $flockOfDucks = new Combining\Flock();
        $flockOfDucks->add($redheadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);

        $flockOfMallards = new Combining\Flock();
        $mallardOne = $duckFactory->createMallardDuck();
        $mallardTwo = $duckFactory->createMallardDuck();
        $mallardThree = $duckFactory->createMallardDuck();
        $mallardFour = $duckFactory->createMallardDuck();
        $flockOfMallards->add($mallardOne);
        $flockOfMallards->add($mallardTwo);
        $flockOfMallards->add($mallardThree);
        $flockOfMallards->add($mallardFour);
        $flockOfDucks->add($flockOfMallards);

        //echo "<br />Duck Simulator: Whole Flock Simulation<br />";
        echo "<br />Duck Simulator: With Observer<br />";
        $quackologist = new Combining\Quackologist();
        $flockOfDucks->registerObserver($quackologist);
        self::simulate($flockOfDucks);

        //echo "<br />Duck Simulator: Mallard Flock Simulation<br />";
        //self::simulate($flockOfMallards);

        echo "<br />The ducks quacked " . Combining\QuackCounter::getQuacks() . " times<br />";
    }

    /**
     * Simulate
     * @param QuackableInterface $duck
     */
    private static function simulate(Combining\QuackableInterface $duck): void
    {
        $duck->quack();
    }
}
