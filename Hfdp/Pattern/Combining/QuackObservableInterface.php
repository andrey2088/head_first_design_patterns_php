<?php

namespace Hfdp\Pattern\Combining;

interface QuackObservableInterface
{
    /**
     * Register observer
     * @param ObserverInterface $observer
     */
    public function registerObserver(ObserverInterface $observer): void;

    /**
     * Notify observers
     */
    public function notifyObservers(): void;
}
