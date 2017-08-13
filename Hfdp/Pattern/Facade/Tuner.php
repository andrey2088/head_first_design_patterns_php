<?php

namespace Hfdp\Pattern\Facade;

class Tuner
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var Amplifier
     */
    private $amplifier;

    /**
     * @var float
     */
    private $frequency;

    /**
     * Constructor
     * @param string $description
     */
    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    /**
     * On
     */
    public function on()
    {
        echo $this->description . " on<br />";
    }

    /**
     * Off
     */
    public function off()
    {
        echo $this->description . " off<br />";
    }

    /**
     * Set frquency
     * @param float $frequency
     */
    public function setFrequency(float $frequency)
    {
        echo $this->description . " setting frequency to " . $frequency . "<br />";
        $this->frequency = $frequency;
    }

    /**
     * Set AM
     */
    public function setAm()
    {
       echo $this->description . " setting AM mode<br />";
    }

    /**
     * Set FM
     */
    public function setFm()
    {
       echo $this->description . " setting FM mode<br />";
    }

    /**
     * Magic method
     * @return string
     */
    public function toString()
    {
        return $this->description;
    }
}
