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
    public function quack()
    {
        echo "Squeck<br />";
        $this->notifyObservers();
    }

    /**
     * Register observer
     * @param ObserverInterface $observer
     */
    public function registerObserver(ObserverInterface $observer)
    {
        $this->observable->registerObserver($observer);
    }

    /**
     * Notify observers
     */
    public function notifyObservers()
    {
        $this->observable->notifyObservers();
    }

    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "Rubber Duck";
    }
}
