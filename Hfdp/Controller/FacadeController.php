<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Facade as Facade;

class FacadeController
{
    /**
     * Main
     */
    public static function main()
    {
        $amp = new Facade\Amplifier("Top-O-Line Amplifier");
		$tuner = new Facade\Tuner("Top-O-Line AM/FM Tuner", $amp);
		$dvd = new Facade\DvdPlayer("Top-O-Line DVD Player", $amp);
		$cd = new Facade\CdPlayer("Top-O-Line CD Player", $amp);
		$projector = new Facade\Projector("Top-O-Line Projector", $dvd);
		$lights = new Facade\TheaterLights("Theater Ceiling Lights");
		$screen = new Facade\Screen("Theater Screen");
		$popper = new Facade\PopcornPopper("Popcorn Popper");

        $homeTheater = new Facade\HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $screen, $lights, $popper);

        $homeTheater->wathcMovie("Raiders of the Lost Ark");
        $homeTheater->endMovie();
    }

}
