<?php

namespace Hfdp\Pattern\Observer;

interface SubjectInterface
{
    /**
     * Register observer
     * @param ObserverInterface $o
     */
    public function registerObserver(ObserverInterface $o);
    
    /**
     * Remove observer
     * @param ObserverInterface $o
     */
    public function removeObserver(ObserverInterface $o);
    
    /**
     * Notify observers
     */
    public function notifyObservers();
}
