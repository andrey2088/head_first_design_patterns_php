<?php

namespace Hfdp\Pattern\Command;

class LightOffCommand implements CommandInterface
{
    /**
     * @var Light
     */
    private $light;

    /**
     * Constructor
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    /**
     * Execute command
     */
    public function execute(): void
    {
        $this->light->off();
    }

    /**
     * Undo
     */
    public function undo(): void
    {
        $this->light->on();
    }
}
