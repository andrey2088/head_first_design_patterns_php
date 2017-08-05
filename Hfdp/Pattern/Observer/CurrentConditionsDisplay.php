<?php

namespace Hfdp\Pattern\Observer;

class CurrentConditionsDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var float
     */
    private $temperature;
    
    /**
     * @var float
     */
    private $humidity;
    
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
            $this->temperature = $subj->getTemperature();
            $this->humidity = $subj->getHumidity();
            $this->display();
        }
    }
    
    /**
     * Display
     */
    public function display()
    {
        $message = "Current conditions: " . number_format($this->temperature, 1) . "F degrees and " 
            . number_format($this->humidity, 1) . "% humidity";
        \Hfdp\Utils::output($message);
    }
}