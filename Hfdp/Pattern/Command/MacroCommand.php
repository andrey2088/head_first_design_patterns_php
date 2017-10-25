<?php

namespace Hfdp\Pattern\Command;

class MacroCommand implements CommandInterface
{
    /**
     * @var CommandInterface[]
     */
    private $commands;

    /**
     * Constructor
     * @param CommandInterface[] $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    /**
     * Execute command
     */
    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    /**
     * Undo
     */
    public function undo(): void
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}
