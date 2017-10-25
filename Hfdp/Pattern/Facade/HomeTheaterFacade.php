<?php

namespace Hfdp\Pattern\Facade;

class HomeTheaterFacade
{
    /**
     * @var Amplifier
     */
    private $amp;

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
     * @var Projector
     */
    private $projector;

    /**
     * @var TheaterLights
     */
    private $lights;

    /**
     * @var Screen
     */
    private $screen;

    /**
     * @var PopcornPopper
     */
    private $popper;

    /**
     * Constructor
     * @param Amplifier $amp
     * @param Tuner $tuner
     * @param DvdPlayer $dvd
     * @param CdPlayer $cd
     * @param Projector $projector
     * @param Screen $screen
     * @param TheaterLights $lights
     * @param PopcornPopper $popper
     */
    public function __construct(Amplifier $amp, Tuner $tuner, DvdPlayer $dvd, CdPlayer $cd, Projector $projector,
            Screen $screen, TheaterLights $lights, PopcornPopper $popper)
    {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->lights = $lights;
        $this->popper = $popper;
    }

    /**
     * Watch movie
     * @param string $movie
     */
    public function wathcMovie(string $movie): void
    {
        echo "Get ready to watch a movie...<br />";
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    /**
     * End movie
     */
    public function endMovie(): void
    {
        echo "Shutting movie theater down...<br />";
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }
}
