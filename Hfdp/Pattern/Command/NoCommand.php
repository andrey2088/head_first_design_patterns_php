<?php

namespace Hfdp\Pattern\Command;

class NoCommand implements CommandInterface
{
    /**
     * Execute command
     */
    public function execute(): void {}

    /**
     * Undo
     */
    public function undo(): void {}
}
