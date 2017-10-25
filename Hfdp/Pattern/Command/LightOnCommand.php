<?php

namespace Hfdp\Pattern\Command;

class LightOnCommand implements CommandInterface
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
        $this->light->on();
    }

    /**
     * Undo
     */
    public function undo(): void
    {
        $this->light->off();
    }
}
