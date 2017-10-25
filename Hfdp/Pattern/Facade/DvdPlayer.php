<?php

namespace Hfdp\Pattern\Facade;

class DvdPlayer
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $currentTrack;

    /**
     * @var Amplifier
     */
    private $amplifier;

    /**
     * @var string
     */
    private $movie;

    /**
     * Constructor
     * @param string $description
     * @param Amplifier $amplifier
     */
    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
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
     * Eject
     */
    public function eject(): void
    {
        $this->movie = null;
        echo $this->description . " eject<br />";
    }

    /**
     * Play
     * @param int|string $trackOrMovie
     */
    public function play($trackOrMovie): void
    {
        if (is_int($trackOrMovie)) {
            if ($this->movie == null) {
                echo $this->description . " can't play track " . $this->currentTrack . ", no dvd inserted<br />";
            } else {
                $this->currentTrack = $trackOrMovie;
                echo $this->description . " playing track " . $this->currentTrack . " of \"" . $this->movie
                        . "\"<br />";
            }
        } else if (is_string($trackOrMovie)) {
            $this->title = $trackOrMovie;
            $this->currentTrack = 0;
            echo $this->description . " playing \"" . $trackOrMovie . "\"<br />";
        }
    }

    /**
     * Stop
     */
    public function stop(): void
    {
        $this->currentTrack = 0;
        echo $this->description . " stopped \"" . $this->movie . "\"<br />";
    }

    /**
     * Pause
     */
    public function pause(): void
    {
        echo $this->description . " paused \"" . $this->movie . "\"<br />";
    }

    /**
     * Set two channel audio
     */
    public function setTwoChannelAudio(): void
    {
        echo $this->description . " set two channel audio<br />";
    }

    /**
     * Set surround audio
     */
    public function setSurroundAudio(): void
    {
        echo $this->description + " set surround audio<br />";
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

