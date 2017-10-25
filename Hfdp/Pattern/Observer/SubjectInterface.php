<?php

namespace Hfdp\Pattern\Observer;

interface SubjectInterface
{
    /**
     * Register observer
     * @param ObserverInterface $o
     */
    public function registerObserver(ObserverInterface $o): void;

    /**
     * Remove observer
     * @param ObserverInterface $o
     */
    public function removeObserver(ObserverInterface $o): void;

    /**
     * Notify observers
     */
    public function notifyObservers(): void;
}
