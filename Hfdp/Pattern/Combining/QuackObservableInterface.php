<?php

namespace Hfdp\Pattern\Combining;

interface QuackObservableInterface
{
    /**
     * Register observer
     * @param ObserverInterface $observer
     */
    public function registerObserver(ObserverInterface $observer);

    /**
     * Notify observers
     */
    public function notifyObservers();
}
