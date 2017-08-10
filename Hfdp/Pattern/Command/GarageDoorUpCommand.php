<?php

namespace Hfdp\Pattern\Command;

class GarageDoorUpCommand implements CommandInterface
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
        $this->garageDoor->up();
    }

    /**
     * Undo
     */
    public function undo() {}
}
