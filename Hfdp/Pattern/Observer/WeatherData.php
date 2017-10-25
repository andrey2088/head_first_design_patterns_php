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
    private function clearChanged(): void
    {
        $this->changed = false;
    }

    /**
     * Set changed to true
     */
    private function setChanged(): void
    {
        $this->changed = true;
    }

    /**
     * Returns changed value
     * @return bool
     */
    public function hasChanged(): bool
    {
        return $this->changed;
    }

    /**
     * Register observer
     * @param ObserverInterface $o
     */
    public function registerObserver(ObserverInterface $o): void
    {
        $this->observers[] = $o;
    }

    /**
     * Remove observer
     * @param ObserverInterface $o
     */
    public function removeObserver(ObserverInterface $o): void
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
    public function notifyObservers(): void
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
    private function measurementsChanged(): void
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
    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
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
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * Returns humidity
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * Returns pressure
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }
}
