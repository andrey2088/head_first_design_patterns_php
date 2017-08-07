<?php

namespace Hfdp\Pattern\Observer;

class ForecastDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var float
     */
    private $currentPressure = 29.92;
    
    /**
     * @var float
     */
    private $lastPressure;
    
    /**
     * @var WeatherData
     */
    private $weatherData;
    
    /**
     * Constructor
     * @param SubjectInterface $weatherData
     */
    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }
    
    /**
     * Update
     * @param SubjectInterface $subj
     * @param mixed $arg
     */
    public function update(SubjectInterface $subj, $arg = null)
    {
        if ($subj instanceof WeatherData) {
            $this->lastPressure = $this->currentPressure;
            $this->currentPressure = $subj->getPressure();
            $this->display();
        }
    }
    
    /**
     * Display
     */
    public function display()
    {
        $message = "Forecast: ";
        if ($this->currentPressure > $this->lastPressure) {
            $message .= "Improving weather on the way!";
        } else if ($this->currentPressure == $this->lastPressure) {
            $message .= "More of the same";
        } else if ($this->currentPressure < $this->lastPressure) {
            $message .= "Watch out for cooler, rainy weather";
        }
        \Hfdp\Utils::outputWithBr($message);
    }
}