<?php

namespace Hfdp\Pattern\Command;

class NoCommand implements CommandInterface
{
    /**
     * Execute command
     */
    public function execute() {}

    /**
     * Undo
     */
    public function undo() {}
}
