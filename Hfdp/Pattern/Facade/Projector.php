<?php

namespace Hfdp\Pattern\Facade;

class Projector
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var DvdPlayer
     */
    private $dvdPlayer;

    /**
     * Constructor
     * @param string $description
     * @param DvdPlayer $dvdPlayer
     */
    public function __construct(string $description, DvdPlayer $dvdPlayer)
    {
        $this->description = $description;
        $this->dvdPlayer = $dvdPlayer;
    }

    /**
     * On
     */
    public function on(): void
    {
        echo $this->description . " on<br />";
    }

    /**
     * Off
     */
    public function off(): void
    {
        echo $this->description . " off<br />";
    }

    /**
     * Widescreen mode
     */
    public function wideScreenMode(): void
    {
        echo $this->description . " in widescreen mode (16x9 aspect ratio)<br />";
    }

    /**
     * TV mode
     */
    public function tvMode(): void
    {
        $this->description . " in tv mode (4x3 aspect ratio)<br />";
    }

    /**
     * Magic method
     * @return string
     */
    public function toString(): string
    {
        return $this->description;
    }
}
