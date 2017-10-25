<?php

namespace Hfdp\Pattern\Command;

class HottubOnCommand implements CommandInterface
{
    /**
     * @var Hottub
     */
    private $hottub;

    /**
     * Constructor
     * @param Hottub $hottub
     */
    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    /**
     * Execute command
     */
    public function execute(): void
    {
        $this->hottub->on();
        $this->hottub->setTemperature(104);
        $this->hottub->circulate();
    }

    /**
     * Undo
     */
    public function undo(): void
    {
        $this->hottub->off();
    }
}
