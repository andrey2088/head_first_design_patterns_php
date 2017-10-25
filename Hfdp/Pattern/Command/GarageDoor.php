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
    public function up(): void
    {
        echo $this->location . " garage door is Open<br />";
    }

    /**
     * Close garage door
     */
    public function down(): void
    {
        echo $this->location . " garage door is Closed<br />";
    }

    /**
     * Stop garage door
     */
    public function stop(): void
    {
        echo $this->location . " garage door is Stopped<br />";
    }

    /**
     * Turn on garage light
     */
    public function lightOn(): void
    {
        echo $this->location . " garage light is on<br />";
    }

    /**
     * Turn off garage light
     */
    public function lightOff(): void
    {
        echo $this->location . " garage light is off<br />";
    }
}
