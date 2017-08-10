<?php

namespace Hfdp\Pattern\Observer;

class WeatherData implements SubjectInterface
{
    /**
     * @var bool
     */
    private $changed = false;

    /**
     * @var array
     */
    private $observers;

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->observers = array();
    }

    /**
     * Set changed to false
     */
    private function clearChanged()
    {
        $this->changed = false;
    }

    /**
     * Set changed to true
     */
    private function setChanged()
    {
        $this->changed = true;
    }

    /**
     * Returns changed value
     */
    public function hasChanged()
    {
        return $this->changed;
    }

    /**
     * Register observer
     * @param ObserverInterface $o
     */
    public function registerObserver(ObserverInterface $o)
    {
        $this->observers[] = $o;
    }

    /**
     * Remove observer
     * @param ObserverInterface $o
     */
    public function removeObserver(ObserverInterface $o)
    {
        foreach ($this->observers as $i => $observer) {
            if ($observer === $o) {
                unset($this->observers[$i]);
            }
        }
    }

    /**
     * Notify observers
     */
    public function notifyObservers()
    {
        if ($this->hasChanged()) {
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
        }
        $this->clearChanged();
    }

    /**
     * This function calls when measurements changed
     */
    private function measurementsChanged()
    {
        $this->setChanged();
        $this->notifyObservers();
    }

    /**
     * Test function.
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    /**
     * Returns temperature
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Returns humidity
     * @return float
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Returns pressure
     * @return float
     */
    public function getPressure()
    {
        return $this->pressure;
    }
}
