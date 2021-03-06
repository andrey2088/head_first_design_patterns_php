<?php

namespace Hfdp\Pattern\Combining;

class QuackCounter implements QuackableInterface
{
    /**
     * @var QuackableInterface
     */
    private $duck;

    /**
     * @var int
     */
    private static $numberOfQuacks;

    /**
     * @var Observable
     */
    private $observable;

    /**
     * Constructor
     * @param QuackableInterface $duck
     */
    public function __construct(QuackableInterface $duck)
    {
        $this->duck = $duck;
        $this->observable = new Observable($this);
    }

    /**
     * Quack
     */
    public function quack(): void
    {
        $this->duck->quack();
        self::$numberOfQuacks++;
        $this->notifyObservers();
    }

    /**
     * Get quacks
     * @return int
     */
    public static function getQuacks(): int
    {
        return self::$numberOfQuacks;
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
        return $this->duck . "";
    }
}
