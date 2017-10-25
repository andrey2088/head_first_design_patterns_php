<?php

namespace Hfdp\Pattern\Observer;

class StatisticsDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var float
     */
    private $maxTemp = 0.0;

    /**
     * @var float
     */
    private $minTemp = 200;

    /**
     * @var float
     */
    private $tempSum = 0.0;

    /**
     * @var int
     */
    private $numReadings;

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
    public function update(SubjectInterface $subj, $arg = null): void
    {
        if ($subj instanceof WeatherData) {
            $temperature = $subj->getTemperature();

            $this->tempSum += $temperature;
            $this->numReadings++;

            if ($temperature > $this->maxTemp) {
                $this->maxTemp = $temperature;
            }

            if ($temperature < $this->minTemp) {
                $this->minTemp = $temperature;
            }

            $this->display();
        }
    }

    /**
     * Display
     */
    public function display(): void
    {
        echo "Avg/Max/Min temperature = " . number_format($this->tempSum / $this->numReadings, 1) . "/"
            . number_format($this->maxTemp, 1) . "/" . number_format($this->minTemp, 1) . "<br />";
    }
}