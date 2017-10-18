<?php

namespace Hfdp\Pattern\Combining;

class DuckCall implements QuackableInterface
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
        echo "Kwak<br />";
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
        return "Duck Call";
    }
}
