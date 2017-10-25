<?php

namespace Hfdp\Pattern\Combining;

class Flock implements QuackableInterface
{
    /**
     * @var array
     */
    private $quackers;

    /**
     * Add
     * @param QuackableInterface $quacker
     */
    public function add(QuackableInterface $quacker): void
    {
        $this->quackers[] = $quacker;
        $this->observable = new Observable($this);
    }

    /**
     * Quack
     */
    public function quack(): void
    {
        foreach ($this->quackers as $quacker) {
            $quacker->quack();
            $this->notifyObservers();
        }
    }

    /**
     * Register observer
     * @param ObserverInterface $observer
     */
    public function registerObserver(ObserverInterface $observer): void
    {
        foreach ($this->quackers as $quacker) {
            $quacker->registerObserver($observer);
        }
    }

    /**
     * Notify observers
     */
    public function notifyObservers(): void {}

    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Flock of Ducks";
    }
}
