<?php

namespace Hfdp\Pattern\Command;

class CeilingFan
{
    public const LEVEL_OFF = 0;
    public const LEVEL_LOW = 1;
    public const LEVEL_MEDIUM = 2;
    public const LEVEL_HIGH = 3;

    /**
     * @var string
     */
    private $location = "";

    /**
     * @var int
     */
    private $speed;

    /**
     * Constructor
     */
    public function __construct(string $location)
    {
        $this->location = $location;
        $this->speed = self::LEVEL_OFF;
    }

    /**
     * Turns the ceiling fan on to high
     */
    public function high(): void
    {
        $this->speed = self::LEVEL_HIGH;
        echo $this->location . " ceiling fan is on high<br />";
    }

    /**
     * Turns the ceiling fan on to medium
     */
    public function medium(): void
    {
        $this->speed = self::LEVEL_MEDIUM;
        echo $this->location . " ceiling fan is on medium<br />";
    }

    /**
     * Turns the ceiling fan on to low
     */
    public function low(): void
    {
        $this->speed = self::LEVEL_LOW;
        echo $this->location . " ceiling fan is on low<br />";
    }

    /**
     * Turns the ceiling fan off
     */
    public function off(): void
    {
        $this->speed = self::LEVEL_OFF;
        echo $this->location . " ceiling fan is off<br />";
    }

    /**
     * Returns speed of the ceiling fan
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }
}
