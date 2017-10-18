<?php

namespace Hfdp\Pattern\Combining;

class Observable implements QuackObservableInterface
{
    /**
     * @var array
     */
    private $observers;

    /**
     *
     * @var QuackObservableInterface
     */
    private $duck;

    /**
     * Constructor
     * @param QuackObservableInterface $duck
     */
    public function __construct(QuackObservableInterface $duck)
    {
        $this->observers = array();
        $this->duck = $duck;
    }

    /**
     * Register observer
     * @param ObserverInterface $observer
     */
    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * Notify observers
     */
    public function notifyObservers()
    {
        foreach($this->observers as $observer) {
            $observer->update($this->duck);
        }
    }
}
