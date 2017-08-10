<?php

namespace Hfdp\Pattern\Command;

class Tv
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var int
     */
    private $channel;

    /**
     * Constructor
     */
    public function __construct(string $location)
    {
        $this->location = $location;
    }

    /**
     * Turns TV on
     */
    public function on()
    {
        echo $this->location . " TV is on<br />";
    }

    /**
     * Turns TV off
     */
    public function off()
    {
        echo $this->location . " TV is off<br />";
    }

    /**
     * Sets input channel
     */
    public function setInputChannel()
    {
        $this->channel = 3;
        echo $this->location . " TV channel is set for DVD<br />";
    }
}
