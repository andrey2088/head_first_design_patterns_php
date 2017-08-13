<?php

namespace Hfdp\Pattern\Facade;

class PopcornPopper
{
    /**
     * @var string
     */
    private $description;

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
    public function on()
    {
        echo $this->description . " on<br />";
    }

    /**
     * Off
     */
    public function off()
    {
        echo $this->description . " off<br />";
    }

    /**
     * Pop
     */
    public function pop()
    {
        echo $this->description . " popping popcorn!<br />";
    }

    /**
     * Magic method
     * @return string
     */
    public function toString()
    {
        return $this->description;
    }
}
