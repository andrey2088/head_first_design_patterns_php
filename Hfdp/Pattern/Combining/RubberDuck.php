<?php

namespace Hfdp\Pattern\Combining;

class RubberDuck implements QuackableInterface
{
    /**
     * @var Observable
     */
    private $observable;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    /**
     * Quack
     */
    public function quack(): void
    {
        echo "Squeck<br />";
        $this->notifyObservers();
    }

    /**
     * Register observer
     * @param ObserverInterface $observer
     */
    public function registerObserver(ObserverInterface $observer): void
    {
        $this->observable->registerObserver($observer);
    }

    /**
     * Notify observers
     */
    public function notifyObservers(): void
    {
        $this->observable->notifyObservers();
    }

    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Rubber Duck";
    }
}
