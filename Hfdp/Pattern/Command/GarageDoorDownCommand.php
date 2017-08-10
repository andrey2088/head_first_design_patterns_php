<?php

namespace Hfdp\Pattern\Command;

class GarageDoorDownCommand implements CommandInterface
{
    /**
     * @var GarageDoor
     */
    private $garageDoor;

    /**
     * Constructor
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    /**
     * Execute command
     */
    public function execute()
    {
        $this->garageDoor->down();
    }

    /**
     * Undo
     */
    public function undo() {}
}
