<?php

namespace Hfdp\Pattern\Facade;

class CdPlayer
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
    private $title;

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
        $this->title = null;
        echo $this->description . " eject<br />";
    }

    /**
     * Play
     * @param int|string $trackOrTitle
     */
    public function play($trackOrTitle): void
    {
        if (is_int($trackOrTitle)) {
            if ($this->title == null) {
                echo $this->description . " can't play track " . $this->currentTrack . ", no cd inserted<br />";
            } else {
                $this->currentTrack = $trackOrTitle;
                echo $this->description . " playing track " . $this->currentTrack . "<br />";
            }
        } else if (is_string($trackOrTitle)) {
            $this->title = $trackOrTitle;
            $this->currentTrack = 0;
            echo $this->description . " playing \"" . $trackOrTitle . "\"<br />";
        }
    }

    /**
     * Stop
     */
    public function stop(): void
    {
        $this->currentTrack = 0;
        echo $this->description . " stopped<br />";
    }

    /**
     * Pause
     */
    public function pause(): void
    {
        echo $this->description . " paused \"" . $this->title . "\"<br />";
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

