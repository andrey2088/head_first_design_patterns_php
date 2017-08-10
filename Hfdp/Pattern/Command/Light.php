<?php

namespace Hfdp\Pattern\Command;

class Light
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
     * Turn on light
     */
    public function on()
    {
        echo $this->location . " light is on<br />";
    }

    /**
     * Turn off light
     */
    public function off()
    {
        echo $this->location . " light is off<br />";
    }
}
