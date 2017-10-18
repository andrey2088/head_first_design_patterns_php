<?php

namespace Hfdp\Pattern\Combining;

class GooseAdapter implements QuackableInterface
{
    /**
     * @var Goose
     */
    private $goose;

    /**
     * @var Observable
     */
    private $observable;

    /**
     * Constructor
     * @param Goose $goose
     */
    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }

    /**
     * Quack
     */
    public function quack()
    {
        $this->goose->honk();
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
        return "Goose pretending to be a Duck";
    }
}
