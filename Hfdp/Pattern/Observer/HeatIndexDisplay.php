<?php

namespace Hfdp\Pattern\Observer;

class HeatIndexDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var float
     */
    private $heatIndex;
    
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
            $this->heatIndex = $this->computeHeatIndex($subj->getTemperature(), $subj->getHumidity());
            $this->display();
        }
    }
    
    /**
     * Display
     */
    public function display()
    {
        echo "Heat index is " . number_format($this->heatIndex, 5) . "<br />";
    }
    
    /**
     * Compute heat index
     * @param float $t
     * @param float $rh
     * @return float
     */
    private function computeHeatIndex(float $t, float $rh)
    {
        $index = (float)((16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh) +
            (0.00941695 * ($t * $t)) + (0.00728898 * ($rh * $rh)) +
            (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh * $rh)) +
            (0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t)) + (0.0000291583 *  
            ($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh)) +
            (0.000000197483 * ($t * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh)) +     
            0.000000000843296 * ($t * $t * $rh * $rh * $rh)) -
            (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
        
        return $index;
    }
}
