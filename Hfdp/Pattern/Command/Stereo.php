<?php

namespace Hfdp\Pattern\Command;

class Stereo
{
    /**
     * @var string
     */
    private $location = "";

    /**
     * Constructor
     */
    public function __construct(string $location)
    {
        $this->location = $location;
    }

    /**
     * Turn on stereo
     */
    public function on(): void
    {
        echo $this->location . " stereo is on<br />";
    }

    /**
     * Turn off stereo
     */
    public function off(): void
    {
        echo $this->location . " stereo is off<br />";
    }

    /**
     * Set CD
     */
    public function setCD(): void
    {
        echo $this->location . " stereo is set for CD input<br />";
    }

    /**
     * Set DVD
     */
    public function setDVD(): void
    {
        echo $this->location . " stereo is set for DVD input<br />";
    }

    /**
     * Set radio
     */
    public function setRadio(): void
    {
        echo $this->location . " stereo is set for Radio<br />";
    }

    /**
     * Set volume
     */
    public function setVolume(int $volume): void
    {
        echo $this->location . " stereo volume set to " . $volume . "<br />";
    }
}
