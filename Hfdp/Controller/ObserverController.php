<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Observer as Observer;

class ObserverController
{
    /**
     * Main
     */
    public static function main()
    {
        $weatherData = new Observer\WeatherData();
        $currentDisplay = new Observer\CurrentConditionsDisplay($weatherData);
        $statisticsDisplay = new Observer\StatisticsDisplay($weatherData);
        $forecastDisplay = new Observer\ForecastDisplay($weatherData);
        $heatIndexDisplay = new Observer\HeatIndexDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);
    }

}
