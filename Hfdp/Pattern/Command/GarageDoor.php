<?php

namespace Hfdp\Pattern\Command;

class GarageDoor
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
     * Open garage door
     */
    public function up()
    {
        echo $this->location . " garage door is Open<br />";
    }

    /**
     * Close garage door
     */
    public function down()
    {
        echo $this->location . " garage door is Closed<br />";
    }

    /**
     * Stop garage door
     */
    public function stop()
    {
        echo $this->location . " garage door is Stopped<br />";
    }

    /**
     * Turn on garage light
     */
    public function lightOn()
    {
        echo $this->location . " garage light is on<br />";
    }

    /**
     * Turn off garage light
     */
    public function lightOff()
    {
        echo $this->location . " garage light is off<br />";
    }
}
