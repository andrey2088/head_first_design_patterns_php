<?php

namespace Hfdp\Pattern\Command;

class Hottub
{
    /**
     * @var bool
     */
    private $on;

    /**
     * @var int
     */
    private $temperature;

    /**
     * Constructor
     */
    public function __construct() {}

    /**
     * Turns hottub on
     */
    public function on()
    {
        $this->on = true;
    }

    /**
     * Turns hottub off
     */
    public function off()
    {
        $this->on = false;
    }

    /**
     * Circulate
     */
    public function circulate()
    {
        if ($this->on) {
            echo "Hottub is bubbling<br />";
        }
    }

    /**
     * Jets on
     */
    public function jetsOn()
    {
        if ($this->on) {
            echo "Hottub jets are on<br />";
        }
    }

    /**
     * Jets off
     */
    public function JetsOff()
    {
        if ($this->on) {
            echo "Hottub jets are off<br />";
        }
    }

    /**
     * Set temperature
     */
    public function setTemperature(int $temperature)
    {
        if ($temperature > $this->temperature) {
            echo "Hottub is heating to a steaming " . $temperature . " degrees<br />";
        } else {
            echo "Hottub is cooling to " . $temperature . " degrees<br />";
        }
        $this->temperature = $temperature;
    }
}
