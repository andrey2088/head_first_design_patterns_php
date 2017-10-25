<?php

namespace Hfdp\Pattern\Facade;

class Amplifier
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var Tuner
     */
    private $tuner;

    /**
     * @var DvdPlayer
     */
    private $dvd;

    /**
     * @var CdPlayer
     */
    private $cd;

    /**
     * Constructor
     * @param string $description
     */
    public function __construct(string $description)
    {
        $this->description = $description;
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
     * Set stereo sound
     */
    public function setStereoSound(): void
    {
        echo $this->description . " stereo mode on<br />";
    }

    /**
     * Set surround sound
     */
    public function setSurroundSound(): void
    {
        echo $this->description . " surround sound on (5 speakers, 1 subwoofer)<br />";
    }

    /**
     * Set volume
     * @param int $level
     */
    public function setVolume(int $level): void
    {
        echo $this->description . " setting volume to " . $level . "<br />";
    }

    /**
     * Set tuner
     * @param Tuner $tuner
     */
    public function setTuner(Tuner $tuner): void
    {
        echo $this->description . " setting tuner to " . $dvd . "<br />";
            $this->tuner = $tuner;
    }

    /**
     * Set DVD
     * @param DvdPlayer $dvd
     */
    public function setDvd(DvdPlayer $dvd): void
    {
        echo $this->description . " setting DVD player to " . $dvd . "<br />";
            $this->dvd = $dvd;
    }

    /**
     * Set CD
     * @param CdPlayer $cd
     */
    public function setCd(CdPlayer $cd): void
    {
        echo $this->description . " setting CD player to " . $cd . "<br />";
            $this->cd = $cd;
    }

    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return $this->description;
    }
}
