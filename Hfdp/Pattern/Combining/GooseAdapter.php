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
    public function quack(): void
    {
        $this->goose->honk();
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
        return "Goose pretending to be a Duck";
    }
}
